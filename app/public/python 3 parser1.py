from bs4 import BeautifulSoup
import requests
from translate import Translator
from nameko.rpc import rpc


baseurl= ""

headers= {
    'User-Agent':'Mozilla/5.0 (Linux; Android 11; moto g(9) plus) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36'
}

productlinks = []

for x in range (1,6):
    r = requests.get('https://highload.today/uk/')
    soup = BeautifulSoup(r.content, 'lxml')
    productlist = soup.find_all('div', class_='lenta-item')
    productlinks = []
    for item in productlist:
        for link in item.find_all('a', href=True):
            productlinks.append(baseurl + link['href'])


print(productlinks)   
            
#testlink ='https://highload.today/uk/google-nadav-granti-25-ukrayinskim-startapam/'

for link in productlinks:
    r = requests.get(link, headers=headers)
    soup = BeautifulSoup(r.content, 'lxml')
    title = soup.find('h2').text.strip()
    short_desc = soup.find('h1', class_='main_title').text.strip()
    date =  soup.find('span', class_='meta-datetime').text.strip()
    body = soup.find('div', class_='content-inner').text.strip()
    try:
        short_desc = soup.find('div', class_='author-block').text.strip()
    except:
        rating = 'no rating'

    info = {
            'title': title,
            'short_desc': short_desc,
            'date': date,
            'body': body
            }
    print(info) 