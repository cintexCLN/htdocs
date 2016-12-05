import MySQLdb
import xmltodict
import sys,getopt,bcrypt,random
from passlib.hash import md5_crypt

def get_master_parameter_array():
	try:
		file=open("c:\\xampp\\htdocs\\background_scripts\\configuration.config",'r')
		file_doc=file.read()
		temp_array=file_doc.split("~:~")
		for each in temp_array:
			master_array.append(each.split(':'))
		file.close()
	except exception as e:
		print "error~:~xx0001~:~Configurations could not be loaded"
get_master_parameter_array()
#if __name__ =="__main__":
#	print "This Module Is not Callable "