<h1>MySQL</h1>

<h3>MySQL의 구조</h3>

![image](https://user-images.githubusercontent.com/62539341/89562067-6285a680-d854-11ea-9a30-a2b503c57864.png)

DB를 사용하면서 얻을 수 있는 장점은
- 데이터를 안전하게 보관할 수 있다.
- 유저별로 DB에 대한 접근 권한을 관리할 수 있다.

<h3>MySQL 서버 접속</h3>

![image](https://user-images.githubusercontent.com/62539341/89563007-c2308180-d855-11ea-897c-b12a0b4837ba.png)

-u는 user의 약자로 어떤 user로 접근할 지 적으면 된다. 여기서는 관리자 계정인 root로 mysql로 접속을 한다. -p는 password이다.

<h3>MySQL 스키마(schema)의 사용</h3>

![image](https://user-images.githubusercontent.com/62539341/89564108-7979c800-d857-11ea-89d3-846f0b707349.png)

opentutorials라는 이름의 데이타베이스를 생성했고, 명령어 SHOW DATABASES;를 통해 데이타베이스가 잘 생성되었는지 확인할 수 있다.

![image](https://user-images.githubusercontent.com/62539341/89564270-b8a81900-d857-11ea-80fb-9a79e5a31597.png)

opentutorials를 사용하기 위해 명령어 USE를 사용했다. 이제 입력되는 명령들은 데이터베이스 opentutorials를 대상으로 실행한다.

<h3>SQL과 테이블 구조</h3>

SQL은 관계형DB라는 카테고리에 속하는 제품들이 공통적으로 DB서버를 제어할때 사용하는 언어이다.

![image](https://user-images.githubusercontent.com/62539341/89565064-ed68a000-d858-11ea-9c20-d05b7d24087f.png)

<h3>MySQL 테이블의 생성</h3>

![image](https://user-images.githubusercontent.com/62539341/89566670-7bde2100-d85b-11ea-9856-5b43d50b64cc.png)

NOT NULL은 이 행을 공백으로 하면 안된다고 하는 것이다.(NULL은 가능)
id는 각각의 행을 구분하는 중요한 식별자로 쓰이고 있기때문에 중복되면 안된다. PRIMARY KEY(id)는 id를 중복하면 안된다고 말한다.

<h3>MySQL의 CRUD</h3>

어떤 DB를 막론하고 반드시 가지고 있는 작업

- Create
- Read
- Update
- Delete

<h3>SQL의 INSERT 구문</h3>

![image](https://user-images.githubusercontent.com/62539341/89660971-0f235f00-d90d-11ea-8ec0-03a530c98141.png)

현재 사용하는 데이터베이스안의 table topic이 잘 들어갔는지 확인할 수 있다.

![image](https://user-images.githubusercontent.com/62539341/89661083-30844b00-d90d-11ea-9847-f04d47960a07.png)

topic 테이블의 각 column에 row 데이터를 삽입했다. id 값은 딱히 언급을 안하면 자동으로 증가하면서 값이 들어간다. VALUES와 순서를 맞춰줘야 값이 제대로 들어간다. <br>
내가 넣은 행이 제대로 들어갔는지 SELECT * FROM topic;을 통해 알 수 있다.

![image](https://user-images.githubusercontent.com/62539341/89666037-a4762180-d914-11ea-8e16-343e0ad13403.png)

이렇게 나머지 행들도 모두 table에 넣어주었다.

<h3>SQL의 SELECT 구문</h3>

![image](https://user-images.githubusercontent.com/62539341/89666689-c45a1500-d915-11ea-9ea5-106a7211e473.png)

SELECT 뒤에 원하는 column 만 타이핑해 골라볼 수도 있다.

![image](https://user-images.githubusercontent.com/62539341/89666917-29ae0600-d916-11ea-8620-4db3740093e6.png)

만약 내가 author가 egoing인 행만 보고 싶다면 WHERE를 이용할 수 있다.<br>
단, FROM 앞에다가 하면 에러가 난다.

![image](https://user-images.githubusercontent.com/62539341/89667048-624ddf80-d916-11ea-824e-da0a2cc581f8.png)

ORDER를 사용해 id값을 기준으로 거꾸로 출력할 수도 있다.

![image](https://user-images.githubusercontent.com/62539341/89667229-bbb60e80-d916-11ea-8377-669acc869ccc.png)

LIMIT로 가져오는 데이터의 수를 제한하는 것도 가능하다.

<h3>SQL의 UPDATE 구문</h3>

![image](https://user-images.githubusercontent.com/62539341/89670224-cc1cb800-d91b-11ea-8f32-5070cf03190c.png)

데이터를 수정할 때는 UPDATE! 너무 간단한 내용이지만 WHERE을 빠뜨리면 모든 데이터가 바뀌게 된다. 이거는 절대 실수하면 안된다!

<h3>SQL의 DELETE 구문</h3>

![image](https://user-images.githubusercontent.com/62539341/89671552-2454b980-d91e-11ea-9da6-751bc76f00a3.png)

DELETE 또한 WHERE 빠뜨리면 절대 안왼다!!!

<h3>관계형 데이터베이스의 필요성</h3>

데이터가 중복 되고 있다 -> 개선할 것이 있다

장점: 별도의 참조 데이터 테이블을 만들어 중복이 없는 뛰어난 퍼포먼스와 쉬운 유지 보수

단점: 별도의 표를 열어 비교해가며 봐야하기 때문에 직관적이지 않고 불편하다.

데이터를 별도의 표에 보관하면서, 볼 때는 하나의 표에서 보기 => MySQL은 가능!

<h3>테이블 분리하기</h3>

![image](https://user-images.githubusercontent.com/62539341/89674198-ba8ade80-d922-11ea-9427-43e384954194.png)
먼저 기존의 topic table의 이름을 topic_backup으로 변경했다. 그리고 topic table을 생성했다.

![image](https://user-images.githubusercontent.com/62539341/89674328-e908b980-d922-11ea-966d-fd2151385cc3.png)

author가 들어갈 부분을 author_id로 했다.

![image](https://user-images.githubusercontent.com/62539341/89674462-28cfa100-d923-11ea-869b-b0e1131f7754.png)

author table도 생성했다.

![image](https://user-images.githubusercontent.com/62539341/89675016-2e79b680-d924-11ea-95a1-9a8cb1ad299d.png)

![image](https://user-images.githubusercontent.com/62539341/89675044-36d1f180-d924-11ea-9c39-5f04015cfd95.png)

<h3>관계형 데이터베이스의 꽃 JOIN</h3>

![image](https://user-images.githubusercontent.com/62539341/89675636-371ebc80-d925-11ea-9a35-bab7d05898f8.png)

topic 테이블과 join 테이블을 합친다. 그런데 author_id와 id column는 생략하고 싶다. 어떻게 해야 할까?

![image](https://user-images.githubusercontent.com/62539341/89675806-88c74700-d925-11ea-967a-87abd6c12739.png)

이렇게 치면 id가 topic table의 id인지, author table의 id인지 애매모호하므로 에러가 난다.

![image](https://user-images.githubusercontent.com/62539341/89675977-c62bd480-d925-11ea-9f68-c6df5d7763bf.png)

topic.id 라고 하면 topic table의 id라는 뜻이다.

![image](https://user-images.githubusercontent.com/62539341/89676071-f6737300-d925-11ea-9250-1f1c5f6903a0.png)

만약 id를 topic_id라고 보여지고 싶으면 AS topic_id라고 하면 된다.

테이블을 분리한다는 것은, 모든 테이블이 식별자 값만 행에 포함하고 있다면 JOIN을 통해 얼마든지 관계를 맺을 수 있다.

<h3>인터넷과 데이터베이스</h3>

client → Internet → server
client ← Internet ← server

mysql은 서버와 클라이언트 둘다 설치<br>
mysql monitor(client)를 통해 명령어로 서버를 제어
