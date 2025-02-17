from bs4 import BeautifulSoup

with open('file.html', 'r') as f:
    contents = f.read()

    soup = BeautifulSoup(contents, "html.parser")

    for tag in soup.find_all('li'):
        print(soup.select('html head title'))