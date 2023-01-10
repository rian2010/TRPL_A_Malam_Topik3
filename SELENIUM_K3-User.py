from selenium import webdriver
from selenium.webdriver.common.alert import Alert
import time

driver = webdriver.Chrome(executable_path='C:\Windows\chromedriver.exe')
driver.maximize_window()
driver.implicitly_wait(10)

#Gagal login
driver.get('http://localhost/PELA_MINI_PBL/login.php')
time.sleep(1) 

username = "damarjati"
inputusername = driver.find_element("xpath",'//*[@id="username"]')
for i in username:
    inputusername.send_keys(i)
    time.sleep(0.05)

password = "123456"
inputPassword = driver.find_element("xpath",'//*[@id="password"]')
for i in password:
    inputPassword.send_keys(i)
    time.sleep(0.05)

submit = driver.find_element("xpath",'/html/body/div/form/input')
submit.click() 
time.sleep(0.5)

#Handle javascript alert
Alert(driver).accept()

#Berhasil login
driver.get('http://localhost/PELA_MINI_PBL/login.php')
time.sleep(0.5)

username = "damarjati"
inputusername = driver.find_element("xpath",'//*[@id="username"]')
for i in username:
    inputusername.send_keys(i)
    time.sleep(0.05)
    
password = "321"
inputPassword = driver.find_element("xpath",'//*[@id="password"]')
for i in password:
    inputPassword.send_keys(i)
    time.sleep(0.05)

submit = driver.find_element("xpath",'/html/body/div/form/input')
submit.click() 
time.sleep(0.5)
    
 #Berhasil Peminjaman
driver.get('http://localhost/PELA_MINI_PBL/index2.php')
time.sleep(0.5)

dashboard = driver.find_element("xpath",'//*[@id="navbarSupportedContent"]/ul/li[2]/a')
dashboard.click()
time.sleep(0.5)

pinjam = driver.find_element("xpath",'/html/body/div/div/div[2]/div/div/div/table/tbody/tr/td[5]/button')
pinjam.click()
time.sleep(0.5)

jumlah = "2"
inputjumlah = driver.find_element("xpath",'//*[@id="jumlah"]')
for i in jumlah:
     inputjumlah.send_keys(i)
     time.sleep(0.05)

tanggalpeminjaman = "17/01/2023"
inputtanggalpeminjaman = driver.find_element("xpath",'//*[@id="tanggal_pinjam"]')
for i in tanggalpeminjaman:
     inputtanggalpeminjaman.send_keys(i)
     time.sleep(0.05)   
 
tanggalpengembalian = "29/01/2023"
inputtanggalpengembalian = driver.find_element("xpath",'//*[@id="tanggal_kembali"]')
for i in tanggalpengembalian:
     inputtanggalpengembalian.send_keys(i)
     time.sleep(0.05)
     
submit = driver.find_element("xpath",'//*[@id="exampleModal"]/div/div/div[2]/div[6]/button[2]')
submit.click() 
time.sleep(0.5)

logout = driver.find_element("xpath",'/html/body/nav/div/div/form/a')
submit.click() 
time.sleep(0.5)
