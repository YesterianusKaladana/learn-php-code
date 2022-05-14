create table posts (
	id int (11) not null PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) not null,
    content varchar(1000) not null,
    date datetime not null
);
insert into posts (subject, content, date) VALUES ('This is the subject', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', '2015-11-14 16:38:01');

UPDATE posts
SET subject='This is a test', content='This is the content'
WHERE id='1'