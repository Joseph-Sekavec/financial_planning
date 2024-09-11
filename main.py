import urllib
import sqlite3
import webbrowser
import os
import _json


print("Hello world")
from datetime import datetime
from wsgiref.validate import validator

###############################################################################################

# Might use SQL to save some of these individual client classes #

###############################################################################################

## I create a database if it does not exist.
conn = sqlite3.connect("budget.db")

## Apparently I have to create a cursor object to do anything in this database:
cursor = conn.cursor()

## I want to create a table of clients if none exists:
cursor.execute('''CREATE TABLE IF NOT EXISTS clients (id INTEGER PRIMARY KEY, first_name varchar(255), last_name varchar(255))''')

cursor.execute('''CREATE TABLE IF NOT EXISTS banks (ID INTEGER REFERENCES clients(id), first_name varchar(255), last_name varchar(255), bank_name varchar(255), account_balance REAL)''')

cursor.execute('''CREATE TABLE IF NOT EXISTS banks (ID INTEGER REFERENCES clients(id), first_name varchar(255), last_name varchar(255), brokerage_name varchar(255), account_balance REAL)''')
def webopen():
    webbrowser.open_new_tab("https://www.google.com")

# print("Hello world")

# list = [1,2,3,4]
bank_name = ""
account_balance = 0

#### I want to be able to take an input as a bank name.
#### Need to change this to somehow get this from the form data once the site is up
#bank_name = input("Give a bank name: ")
#print("Bank account is: " + bank_name)

#### Same thing for the account_balance
#account_balance = input("Give the balance for this account: ")
#print("The Balance for BOA is: " + str(account_balance))


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
#### We need to get these values and throw them back to the JavaScript... But it might be more efficient to
#### do some of these calculations in javascript? I'll figure it out later, but at least the logic is here.


#jake = client()

#print(jake.bank_account)

#print(sum_bank_value(jake))

#pie_chart(jake)



#o = input("Would you like to open a web browser? ")
#if o == "Yes" or o== "yes" or o == 'y' or o =='Y':
#    webopen()



## jake.account = (["BOA","CHASE"],[12,1])


#jake.bank_account.append("BOA")
#jake.bank_account.append("CHASE")
#jake.bank_account_value.append(12)
#jake.bank_accoun