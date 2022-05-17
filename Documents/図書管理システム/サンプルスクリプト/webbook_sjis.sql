/*
 * �f�[�^�x�[�X(webbook)��
 * ���[�U(webbookuser)�̍쐬
 */
DROP DATABASE IF EXISTS webbook;
DROP USER IF EXISTS webbookuser;
CREATE USER webbookuser WITH PASSWORD 'himitu';
CREATE DATABASE webbook OWNER webbookuser ENCODING 'UTF8';
\c webbook

-- ���p�҃e�[�u���̍쐬
CREATE TABLE member (
	user_id SERIAL PRIMARY KEY,
	user_family_name VARCHAR(10) NOT NULL,
	user_name VARCHAR(10) NOT NULL,
	user_postal CHAR(7) NOT NULL,
	user_address VARCHAR(100) NOT NULL,
	user_tel VARCHAR(20) NOT NULL,
	user_email VARCHAR(100) NOT NULL,
	user_birthday DATE NOT NULL,
	user_password VARCHAR(12) DEFAULT 'himitu' NOT NULL,
	user_role CHAR(1) NOT NULL
);


-- �e�[�u���̏��L�Ґݒ�
ALTER TABLE member OWNER TO webbookuser;

-- ���p�҃e�[�u���̃T���v���f�[�^
INSERT INTO member VALUES(1, '����', '���Y', '1000000', '�����s', '090-1111-1111', 'ai@dd.co.jp', '1984-10-01', DEFAULT, 1);
INSERT INTO member VALUES(2, '�ɓc', '���Y', '1100000', '��t��', '090-2222-2222', 'ida@dd.co.jp', '1954-10-2', DEFAULT, 1);
INSERT INTO member VALUES(3, '�F�c', '�O�Y', '1200000', '���ꌧ', '090-3333-3333', 'uda@dd.co.jp', '1939-10-3', DEFAULT, 1);