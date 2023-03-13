create database onemovies;
use onemovies;

create table video( 
	video_id int primary key NOT NULL,
    title varchar(100) NOT NULL,
    description varchar(300) NOT NULL,
    publishdate date NOT NULL,
    source varchar(50) NOT NULL,
    reviews varchar(300),
    embed varchar(300) /*adds cell for embedding link*/
);
create table user(
	user_id int primary key NOT NULL,
    username varchar(30) NOT NULL,
    password varchar(30) NOT NULL
);
/*table made by rw for list of movies user wants to watch*/
create table listof(
	listof int primary key NOT NULL,
    title varchar(100) NOT NULL,
    embed varchar(300) NOT NULL
);
CREATE TABLE video_watched (
    id INT PRIMARY KEY AUTO_INCREMENT,
    video_id INT NOT NULL,
    user_id INT NOT NULL,
    watched_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (video_id) REFERENCES listof(listof),
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);
insert into video(video_id, title, description, publishdate, source, reviews) values (0,"Pokemon The Movie - The Power of Us - Full Trailer","Five strangers come together to save the day in Fula City when a series of threats endanger the annual Wind Festival and the city's entire population.",'2018-12-06',"DailyMotion",NULL,"https://www.dailymotion.com/embed/video/x6yhbne"); 
insert into video(video_id, title, description, publishdate, source, reviews) values (1,"3+ Hours Of Horror Stories To Keep You Up All Night","TIMESTAMPS: 0:00 “Intro”,	0:22 “Every Fall My Family Plays The Better Behave Game”,	18:00 “The Rescue Mission Was In The No-Go Zone In Northern Alaska, That’s Why They Sent Me”,	38:27 “I Invented A List Of Strange Rules For My Stupid Office Job”",'2022-03-19',"Youtube",NULL,"https://www.youtube.com/embed/_9oueEOX2tI");

insert into user(user_id, username, password) values (0,"exampleusername", "examplepassword");

    
