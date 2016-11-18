import MySQLdb
import xmltodict
with open('configuration.xml') as fd:
	configuration_array = xmltodict.parse(fd.read())
db = MySQLdb.connect("localhost","root","Sahil_1231","cln" )

	# prepare a cursor object using cursor() method
	cursor = db.cursor()