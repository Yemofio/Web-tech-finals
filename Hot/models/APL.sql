create schema DNOY40642022;
use DNOY40642022;
CREATE TABLE Team (
  Team_ID varchar(10) not null,
  Club varchar(15) not null,
  League_position tinyint not null,
  trophies tinyint,
  PRIMARY KEY (Team_ID)
);

CREATE TABLE Player (
    Player_ID varchar(9) not null,
    Team_ID varchar(10) not null,
    first_name varchar(15) not null,
    last_name varchar(15) not null,
    completion_year year not null,
    jersey_number tinyint,
    goals tinyint,
    assists tinyint,
    interceptions tinyint,
    clearances tinyint,
    tackles tinyint,
    clean_sheets tinyint,
    fouls tinyint,
    saves tinyint,
    cards tinyint,
    take_ons tinyint,
    key_passes tinyint,
    appearances tinyint,
    PRIMARY KEY (Player_ID),
    foreign key (Team_ID) references Team (Team_ID)
);

CREATE TABLE Coach (
  Coach_ID varchar(10) not null,
  Team_ID varchar(10) not null,
  first_name varchar(15) not null,
  last_name varchar(15) not null,
  completion_year year not null,
  gender enum ('male', 'female') not null,
  appearances tinyint,
  PRIMARY KEY (Coach_ID),
  foreign key (Team_ID) references Team (Team_ID)
);

CREATE TABLE Matchday (
  Match_ID varchar(10) not null,
  Team_ID_A varchar(10) not null,
  Team_ID_B varchar(10) not null,
  scoreline tinytext,
  match_date datetime,
  PRIMARY KEY (Match_ID),
  foreign key (Team_ID_A) references Team(Team_ID),
  foreign key (Team_ID_B) references Team(Team_ID)
 );
 
CREATE TABLE League_standings (
  Coach_ID varchar(10) not null,
  Team_ID varchar(10) not null,
  position tinyint not null,
  Club varchar(15) not null,
  wins tinyint,
  draws tinyint,
  defeats tinyint,
  points tinyint not null,
  foreign key (Coach_ID) references Coach(Coach_ID),
  foreign key (Team_ID) references Team(Team_ID)
);

CREATE TABLE Team_fixture (
  Match_ID varchar(10) not null,
  Team_ID varchar(10) not null,
  foreign key (Match_ID) references Matchday(Match_ID),
  foreign key (Team_ID) references Team (Team_ID)
);



insert into `Team` values(10001,'Kasanoma FC', 1, 5);   
insert into `Team` values(10002, 'Red Army FC', 4, 8);
insert into `Team` values(10003, 'Elites FC', 2, 2);
insert into `Team` values(10004, 'Northside FC', 6, 1);
insert into `Team` values(10005, 'Highlanders FC', 3, 2);
insert into `Team` values(10006, 'LOL FC', 5, 0);


insert into `Player` values(900001, 10001, 'Benjamin', 'Darko', 2022, 9, 6, 3, 8, 1, 7, 1, 16, 0, 3, 19, 8, 5);
insert into `Player` values(900002, 10001, 'Akwasi', 'Boateng', 2022, 1, 0, 0, 0, 2, 0, 1, 2, 23, 0, 0, 2, 5);
insert into `Player` values(900003, 10003, 'Kofi', 'Obeng', 2021, 10, 3, 4, 5, 1, 4, 2, 10, 0, 1, 10, 3, 4);
insert into `Player` values(900004, 10004, 'Kweku', 'Adjei', 2023, 20, 2, 0, 7, 2, 7, 1, 19, 0, 6, 6, 8, 2);
insert into `Player` values(900005, 10005, 'Kwame', 'Kyei', 2021, 11, 1, 5, 10, 0, 8, 1, 15, 0, 9, 10, 11, 2);
insert into `Player` values(900006, 10006, 'Dan', 'Ofori', 2020, 6, 1, 0, 11, 1, 6, 2, 14, 0, 8, 13, 10, 5);


insert into `Coach` values(60001, 10002, 'Ben', 'Osei', 2021, 'male', 5);
insert into `Coach` values(60002, 10005, 'Elorm', 'Etse', 2021, 'male', 5);
insert into `Coach` values(60003, 10001, 'Mike', 'Vans', 2020, 'male', 5);
insert into `Coach` values(60004, 10003, 'Franco', 'Ocran', 2020, 'male', 5);
insert into `Coach` values(60005, 10004, 'Vicky', 'Dufie', 2020, 'female', 5);
insert into `Coach` values(60006, 10006, 'Steve', 'Darko', 2021, 'male', 5);


insert into `Matchday` values(2410001, 10004, 10001, '0-4', '2019-10-21-08-30-05');
insert into `Matchday` values(2410002, 10006, 10003, '1-4', '2019-10-21-10-30-09');
insert into `Matchday` values(2410003, 10002, 10005, '1-2', '2019-10-21-12-30-25');
insert into `Matchday` values(2410004, 10001, 10006, '5-1', '2019-11-05-08-30-00');
insert into `Matchday` values(2410005, 10003, 10004, '1-0', '2019-10-21-08-30-05');


insert into `League_standings` values(60003, 10001, 'Kasanoma', 1, 4, 0, 1, 12);
insert into `League_standings` values(60004, 10003, 'Elites', 2, 3, 1, 1, 10);
insert into `League_standings` values(60002, 10005, 'Highlanders', 3, 3, 0, 2, 9);
insert into `League_standings` values(60001, 10002, 'Red Army', 4, 2, 1, 2, 7);
insert into `League_standings` values(60006, 10006, 'LOL', 5, 1, 2, 2, 5);
insert into `League_standings` values(60005, 10004, 'Northside', 6, 0, 1, 4, 1);


insert into `Team_fixture` values(2410001, 10001);
insert into `Team_fixture` values(2410001, 10004);
insert into `Team_fixture` values(2410002, 10003);
insert into `Team_fixture` values(2410002, 10006);
insert into `Team_fixture` values(2410003, 10002);
insert into `Team_fixture` values(2410003, 10005);
insert into `Team_fixture` values(2410004, 10001);
insert into `Team_fixture` values(2410004, 10006);
insert into `Team_fixture` values(2410005, 10003);
insert into `Team_fixture` values(2410005, 10004);




select Team_name,wins, draws, defeats, points
 from league_standings 
 inner join team using (Team_ID)
 order by position;
 
 select Team_ID_A as Home, Team_ID_B as Away, scoreline
 from matchday
 full join Team_fixture using (Match_ID)
 where scoreline is not null;
 
select first_name as Coach, Team_name as Team, position, points
from coach
inner join team using (Team_ID)
inner join league_standings using (Team_ID)
order by position;

select first_name as player, player_ID, goals
from player
where player.first_name is not null and (
select max(goals) as goals
from player)
order by goals desc
limit 5;


select first_name as player, player_ID, assists
from player
where player.first_name is not null and (
select max(assists) as assists
from player)
order by assists desc
limit 5; 


select * from player left outer join coach using (Team_ID)
union all
select * from coach right outer join player using (Team_ID);


