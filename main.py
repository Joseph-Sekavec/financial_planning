import urllib
import sqlite3
import webbrowser
import os
import _json
import sys
import argparse
from datetime import datetime
from decimal import Decimal




def p():
    print("Hello")


if len(sys.argv)==2:
    if str(sys.argv[1]) == "p()":
        p()

#print ('argument list', sys.argv)
 # Yay, we can take in command line arguments... So... How the fuck do we
                   # get javascript to pass commands to the command line?
# print ("Hello {}. How are you?".format(name))

#name = str(sys.argv[1])
#name1 = str(sys.argv[2])
#name2 = str(sys.argv[3])
#print(name + " " + name1 + " " + name2)
##### Works as I thought!
## webbrowser.open_new_tab(name)



#for i in sys.argv:
#    print(i)

##file = 'test.txt'

##open(file, 'a').close()

print("Hello world")

from wsgiref.validate import validator

###############################################################################################

# Might use SQL to save some of these individual client classes #

###############################################################################################

## I create a database if it does not exist, connect to it if it does.
conn = sqlite3.connect("budget.db")

## Apparently I have to create a cursor object to do anything in this database:
cursor = conn.cursor()

## I want to create a table of clients if none exists:
cursor.execute('''CREATE TABLE IF NOT EXISTS clients (id INTEGER PRIMARY KEY, first_name varchar(255), last_name varchar(255))''')

cursor.execute('''CREATE TABLE IF NOT EXISTS banks (ID INTEGER REFERENCES clients(id), first_name varchar(255), last_name varchar(255), bank_name varchar(255), account_balance REAL)''')

cursor.execute('''CREATE TABLE IF NOT EXISTS brokerages (ID INTEGER REFERENCES clients(id), first_name varchar(255), last_name varchar(255), brokerage_name varchar(255), account_balance REAL)''')

# cursor.execute('''insert into clients values (?,?,?)''', (0, "John", "Doe"))


#####################################
## When a user creates an account, I really want to create a user ID that will
## pass to the database
#####################################

##### This will check for command line arguments, and push the inputs to the database.

if len(sys.argv) ==4:
    print("4!!!!!!!!!!!!!")
    id_num = int(sys.argv[1])
    FirstName = str(sys.argv[2])
    LastName = str(sys.argv[3])

    cursor.execute('''insert into clients values (?,?,?)''', (id_num, FirstName, LastName))
    conn.commit()

elif (len(sys.argv) == 7):
    print("SEVEN")
    if str(sys.argv[1]) == "bank":
        print("BANK!!!!!!")
        id_num = int(sys.argv[2])
        FirstName = str(sys.argv[3])
        LastName = str(sys.argv[4])
        BankName = str(sys.argv[5])
        BankBalance = float(sys.argv[6])
        cursor.execute('''insert into banks values (?,?,?,?,?)''', (id_num, FirstName, LastName, BankName, BankBalance))
        conn.commit()

    elif str(sys.argv[1]) == "brokerage":
        print("BROKERSSSSSSSSSSSSSSSSSSS")
        id_num = int(sys.argv[2])
        FirstName = str(sys.argv[3])
        LastName = str(sys.argv[4])
        BrokerName = str(sys.argv[5])
        BrokerBalance = float(sys.argv[6])
        cursor.execute('''insert into brokerages values (?,?,?,?,?)''', (id_num, FirstName, LastName, BrokerName, BrokerBalance))
        conn.commit()




#### I will need to obtain info from the sql using a form, then feed it to this function somehow.
def sum_bank_value(client):
    s = 0
    for i in client.bank_account_value:
        s+=i
    client.bank_account_value = s
#### Same here...
def pie_chart(client):
    iteration = 0
    for i in client.bank_account:
        percent = (100 * client.bank_account_value[iteration]/sum_bank_value(client))
        p = str(percent)
        print("Your percentage for " + i+ " is: " + p + "%")

        iteration += 1







print("Size of argument vector: ")

print(len(sys.argv))













def initialize_client(ident, fn,ln):
    ## This function will add the client to the database.
    cursor.execute("INSERT INTO clients", {"id":ident, "first_name":fn, "last_name":ln})



## Example of how to open web browser. Seemed important at the time.
#def webopen():
#    webbrowser.open_new_tab("https://www.google.com")

# print("Hello world")

# list = [1,2,3,4]
bank_name = ""
account_balance = 0


#### I'm not sure where I'm going with this class.
class bank_account:
    def __init__(self, bank_name, value):
        bank_name = bank_name
        value = value


#### Client has bank accounts and values attached to said accounts.
#### It would also be nice to have some brokerage stuff.
class client:
    def __init__(self):
        self.bank_account = []
        self.bank_account_value = []

        self.brokerage_account_name = []
        self.brokerage_account_value = []

        self.monthly_expense_name = []
        self.monthly_expense_value = []

        self.retirement_date = datetime(1999,1,1)
        self.age = 0

        self.employer_name = ""

        self.monthly_income = 0
        self.yearly_income = 0
        self.yearly_dividend_income = 0

        self.total_bank_value = 0
        self.total_brokerage_value = 0
        self.total_value = 0
##### Client class will probably be our biggest class, hence it's here in main. And well,
##### it's the most important part of this whole thing really...

