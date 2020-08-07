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