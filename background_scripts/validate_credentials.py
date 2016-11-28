import MySQLdb
import xmltodict
import sys,getopt,bcrypt

with open('configuration.xml') as fd:
	config_array = xmltodict.parse(fd.read())
database_username=config_array['configuration']['database_login']['database_link']['database_credentials']['db_username']
database_password=config_array['configuration']['database_login']['database_link']['database_credentials']['db_password']
database_server=config_array['configuration']['database_login']['database_link']['database_credentials']['db_server']
database_server_port=config_array['configuration']['database_login']['database_link']['database_credentials']['db_port']
database_name="cln"

class verify_credentials: 
	def __init__(self):
		try:
			self.db = MySQLdb.connect(database_server,database_username,database_password,database_name )
			# prepare a cursor object using cursor() method
			self.cursor = db.cursor()
		except Exception as e:
			print "login error"+str(e)
	def verify_credentials(self,username,password):
		if process_credentials(username,password)=="111":
			sql="select u_password from user_cre where u_username='"+password+"'"
	def process_credentials(self,username,password):
		return "111"
	def execute_query(self,query):
		try:
			self.cursor.execute(query)
		except:
			print "Error in Query Processing"
def main(argv):
	username=""
	password=""
	try:
		opts, args = getopt.getopt(argv,"hu:p:",["iuser=","ipass"])
	except getopt.GetoptError:
		print 'validate_credentials.py -u <user> -p <pass>'
		sys.exit(2)
	for opt, arg in opts:
		if opt == '-H':
			print 'validate_credentials.py -u <user> -p <pass>'
			sys.exit()
		elif opt in ("-u", "--iuser"):
			username = arg.strip()
		elif opt in ("-i","--ipass"):
			password= arg.strip()
	password= bcrypt.hashpw('Cintex2016$', bcrypt.gensalt())
	print password+"sa"
	#print 'Input file is :', filename
	if username=="":
		sys.exit()
	if password=="":
		sys.exit()
	
	check_credentials=verify_credentials()
	check_credentials()
if __name__=="__main__":	
	main(sys.argv[1:])