## Connecting to the database

## importing 'mysql.connector' as mysql for convenient
import mysql.connector as mysql

mydb = mysql.connect(
    
)
db_connection = mysql.connect(
    host = "127.0.0.1",
    port= "3307",
    user = "root",
    passwd="Pa$$word?"
)
print(db_connection) # it will print a connection object if everything is fine