import MySQLdb
import xmltodict
import sys,getopt,bcrypt,random
from passlib.hash import md5_crypt

with open('C:\\xampp\\htdocs\\background_scripts\\configuration.xml') as fd:
	config_array = xmltodict.parse(fd.read())
database_username=config_array['configuration']['database_login']['database_link']['database_credentials']['db_username']
database_password=config_array['configuration']['database_login']['database_link']['database_credentials']['db_password']
database_server=config_array['configuration']['database_login']['database_link']['database_credentials']['db_server']
database_server_port=config_array['configuration']['database_login']['database_link']['database_credentials']['db_port']
database_name="cln"
universal_slt_key=config_array['configuration']['security']['slt_key']
User_f_l_name=""
User_ID=0
class verify_credentials:
	db_connection=None
	def __init__(self):
		try:
			self.db_connection=MySQLdb.connect(database_server,database_username,database_password,database_name )
			self.cursor = self.db_connection.cursor()
		except Exception as e:
			print "error~:~x1004~:~Database connection could not be made today"+str(e)
	def authenticate_credentials(self,username,password):
		global User_f_l_name,User_ID
		if self.process_credentials(username,password)=="111":
			sql="select u_id,u_first_name,u_last_name,u_password,u_slt_key from user_cre where u_username='"+username+"'"
			self.cursor.execute(sql)
			result=self.cursor.fetchone()
			if(result==None):
				return -112
			else:
				if(self.check_password(result[3],password,result[4])==-111):
					User_f_l_name=result[1]+' '+result[2]
					User_ID=result[0]
					return -111
				else:
					print "error~:~x1002~:~Password Dosen't Match"
					sys.exit()
			return None
		else:
			return None
	def check_password(self,raw_data,password,slt_key):
		if bcrypt.hashpw(str(password+universal_slt_key+slt_key), raw_data) == raw_data:
			return -111
		else:
			return 0
		return 0
	def process_credentials(self,username,password):
		return "111"
	def execute_query(self,query):
		try:
			self.cursor.execute(query)
		except:
			print "error~:~x1003~:~Internal error"
			sys.exit()
def main(argv):
	username=""
	password=""
	try:
		opts, args = getopt.getopt(argv,"hu:p:",["iuser=","ipass"])
	except getopt.GetoptError:
		#print 'validate_credentials.py -u <user> -p <pass>'
		print "error~:~x1008~:~Parameter not Passed Correctly"
		sys.exit(2)
	for opt, arg in opts:
		if opt == '-H':
			#print 'validate_credentials.py -u <user> -p <pass>'
			print "error~:~x1009~:~Parameter not Passed Correctly"
			sys.exit()
		elif opt in ("-u", "--iuser"):
			username = arg.strip()
		elif opt in ("-p","--ipass"):
			password= arg.strip()
	#print username+"   "+password
	#print 'Input file is :', filename
	#print bcrypt.hashpw(str(random.random()), bcrypt.gensalt())
	#print "<br>"
	#print bcrypt.hashpw(str(password+universal_slt_key), bcrypt.gensalt())
	if username=="":
		print "error~:~x1006~:~Username Can't Be Empty"
		sys.exit()
	if password=="":
		print "error~:~x1007~:~Password Cant Be Empty"
		sys.exit()	
	check_credentials=verify_credentials()
	token=check_credentials.authenticate_credentials(username,password)
	if(token==-111):
		print "Token~:~"+md5_crypt.hash(str(random.random()))+'~:~'+User_f_l_name+'~:~'+str(User_ID)
	else:
		if (token==-112):
			print "error~:~#1005~:~Usename Not Found"
		else:
			print "error~:~#1001~:~Password Does Not Match"

if __name__=="__main__":
	main(sys.argv[1:])