create database onemovies;
use onemovies;
create table video(
	video_id int primary key NOT NULL,
    title varchar(100) NOT NULL,
    description varchar(300) NOT NULL,
    publishdate date NOT NULL,
    source varchar(50) NOT NULL,
    reviews varchar(300)
);
create table user(
	user_id int primary key NOT NULL,
    username varchar(30) NOT NULL,
    password varchar(30) NOT NULL,
    video_list varchar(200)
);
insert into video(video_id, title, description, publishdate, source, reviews) values (0,"Pokemon The Movie - The Power of Us - Full Trailer","Five strangers come together to save the day in Fula City when a series of threats endanger the annual Wind Festival and the city's entire population.",'2018-12-06',"DailyMotion",NULL);
insert into video(video_id, title, description, publishdate, source, reviews) values (1,"3+ Hours Of Horror Stories To Keep You Up All Night","TIMESTAMPS: 0:00 “Intro”,	0:22 “Every Fall My Family Plays The Better Behave Game”,	18:00 “The Rescue Mission Was In The No-Go Zone In Northern Alaska, That’s Why They Sent Me”,	38:27 “I Invented A List Of Strange Rules For My Stupid Office Job”",'2022-03-19',"Youtube",NULL);
insert into user(user_id, username, password) values (0,"exampleusername", "examplepassword");