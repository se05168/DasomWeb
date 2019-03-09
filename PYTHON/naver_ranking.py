
#-*- encoding:utf8 -*-
import MySQLdb
import requests
from bs4 import BeautifulSoup

if __name__=="__main__":
    source_code = requests.get('http://www.naver.com')
    bs4 = BeautifulSoup(source_code.text, "html.parser")
    ranklist = bs4.find_all('li', class_='ah_item')

    db = MySQLdb.connect(host='127.0.0.1', user='root', password='apmsetup', db='homepage', charset='utf8')
    cursor = db.cursor()

    # cursor.execute("DROP TABLE ranking;")
    # cursor.execute("CREATE TABLE ranking( num INT, con VARCHAR(20), url TEXT);")

    sql = "SELECT * FROM ranking_new;"
    cursor.execute(sql)
    rs = cursor.fetchall()

    for row in rs:
        sql = "UPDATE ranking SET con=%s, url=%s WHERE num=%s;"
        # print (row)
        cursor.execute(sql, (row[1], row[2], row[0]))
        db.commit()

    count = 1
    for data in ranklist:
        if count <= 20:
            rankidx = int(data.find('span', class_='ah_r').get_text())
            ranktxt = data.find('span', class_='ah_k').get_text()
            # print(rankidx, '위 ::', ranktxt)
            sql = "UPDATE ranking_new SET con=%s WHERE num=%s;"
            cursor.execute(sql, (ranktxt, rankidx))
            db.commit()
            count += 1
        else:
            rankurl = data.find('a', class_='ah_a')
            rankidx = data.find('span', class_='ah_r').get_text()
            # print(rankurl['href'])
            sql = "UPDATE ranking_new SET url=%s WHERE num=%s;"
            cursor.execute(sql, (rankurl['href'], rankidx))
            db.commit()
            count += 1

    db.close()
    

# 1. 실시간으로 가져오기 (O)
    # 1-1. table 삭제하는게 아니라 update 하는 방식 시도해보기 (O)
    # 1-2. url 가져와서 하이퍼텍스트 지정하기 (O)
# 2. 이전 검색어 출력하기 (o)
# 3. 상승, 하락, 유지, 새로운거, 사라진거 (X)
