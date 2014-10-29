CREATE TABLE `User` (
  userId        int(10) NOT NULL AUTO_INCREMENT comment 'Auto-incrementing primary key', 
  login         varchar(20) NOT NULL UNIQUE comment 'Login name to the system', 
  password      varchar(255) NOT NULL, 
  email         varchar(255) NOT NULL UNIQUE comment 'E-mail address for the account. This will also be used for retrieving lost password.', 
  avatar        int(10), 
  createDate    date NOT NULL, 
  lastLoginDate date, 
  phone         int(10), 
  coordLat      varchar(20), 
  coordLeng     varchar(20), 
  keywords      varchar(1023), 
  galleryLink   varchar(1023), 
  displayName   varchar(30), 
  `Column`      int(11), 
  PRIMARY KEY (userId), 
  UNIQUE INDEX (userId)) CHARACTER SET UTF8;
CREATE TABLE Member (
  memberId  int(10) NOT NULL AUTO_INCREMENT, 
  name      int(10) NOT NULL, 
  email     int(10) NOT NULL UNIQUE, 
  phone     int(10), 
  photoLink int(10), 
  birthday  date, 
  PRIMARY KEY (memberId)) CHARACTER SET UTF8;
CREATE TABLE FamilyMembers (
  userId   int(10) NOT NULL, 
  memberId int(10) NOT NULL UNIQUE, 
  PRIMARY KEY (userId)) CHARACTER SET UTF8;
CREATE TABLE Blogs (
  blogId int(10) NOT NULL AUTO_INCREMENT, 
  userId int(10) NOT NULL, 
  PRIMARY KEY (blogId)) CHARACTER SET UTF8;
CREATE TABLE Post (
  postId   int(10) NOT NULL, 
  text     varchar(2047) NOT NULL, 
  title    varchar(127) NOT NULL, 
  postDate date NOT NULL, 
  PRIMARY KEY (postId), 
  UNIQUE INDEX (postId)) CHARACTER SET UTF8;
CREATE TABLE BlogEntries (
  blogId   int(10) NOT NULL UNIQUE, 
  postId   int(10) NOT NULL UNIQUE, 
  mapEntry varchar(255)) CHARACTER SET UTF8;
CREATE TABLE Conversation (
  userFromId     int(10) NOT NULL, 
  userToId       int(10) NOT NULL, 
  conversationId int(10) NOT NULL AUTO_INCREMENT, 
  `date`         date NOT NULL, 
  isStayRequest  tinyint(1) NOT NULL, 
  PRIMARY KEY (conversationId), 
  UNIQUE INDEX (conversationId)) CHARACTER SET UTF8;
CREATE TABLE NaughtyWords (
  list varchar(127) NOT NULL, 
  PRIMARY KEY (list)) CHARACTER SET UTF8;
CREATE TABLE Logs (
  eventId   int(254) NOT NULL AUTO_INCREMENT, 
  eventType int(10) NOT NULL, 
  eventDate date NOT NULL, 
  userId    int(10), 
  PRIMARY KEY (eventId)) CHARACTER SET UTF8;
CREATE TABLE HostPlace (
  hostUserId      int(10) NOT NULL, 
  available       tinyint DEFAULT 1 NOT NULL, 
  homeschooling   tinyint(1), 
  numPerson       tinyint, 
  vegetarian      tinyint(1), 
  pets            tinyint(1), 
  ownBedroon      tinyint(1), 
  outdoorSpace    tinyint(1), 
  hasWiFi         tinyint(1), 
  acceptsPets     tinyint UNIQUE, 
  acceptsSmoking  tinyint, 
  publicTransport varchar(1023), 
  pickupOk        tinyint(1), 
  wheelchairOk    tinyint(1), 
  doctorAvailable text, 
  hasSwimming     tinyint(1), 
  hasBeach        tinyint(1), 
  hasShopping     tinyint(1), 
  limitations     varchar(1023), 
  sights          varchar(2047), 
  CONSTRAINT limitations 
    PRIMARY KEY (hostUserId)) CHARACTER SET UTF8;
CREATE TABLE ReplyList (
  conversationId int(10) NOT NULL, 
  postId         int(10) NOT NULL, 
  PRIMARY KEY (conversationId)) CHARACTER SET UTF8;
CREATE TABLE StayRequest (
  conversationId int(10) NOT NULL UNIQUE, 
  nrPerson       int(10), 
  startDate      date, 
  finishDate     int(11)) CHARACTER SET UTF8;
ALTER TABLE FamilyMembers ADD INDEX FKFamilyMemb286753 (userId), ADD CONSTRAINT FKFamilyMemb286753 FOREIGN KEY (userId) REFERENCES `User` (userId);
ALTER TABLE FamilyMembers ADD INDEX FKFamilyMemb316795 (memberId), ADD CONSTRAINT FKFamilyMemb316795 FOREIGN KEY (memberId) REFERENCES Member (memberId);
ALTER TABLE BlogEntries ADD INDEX FKBlogEntrie198559 (postId), ADD CONSTRAINT FKBlogEntrie198559 FOREIGN KEY (postId) REFERENCES Post (postId);
ALTER TABLE BlogEntries ADD INDEX FKBlogEntrie436693 (blogId), ADD CONSTRAINT FKBlogEntrie436693 FOREIGN KEY (blogId) REFERENCES Blogs (blogId);
ALTER TABLE HostPlace ADD INDEX FKHostPlace560642 (hostUserId), ADD CONSTRAINT FKHostPlace560642 FOREIGN KEY (hostUserId) REFERENCES `User` (userId);
ALTER TABLE Conversation ADD INDEX FKConversati385998 (userToId), ADD CONSTRAINT FKConversati385998 FOREIGN KEY (userToId) REFERENCES `User` (userId);
ALTER TABLE Conversation ADD INDEX FKConversati106925 (userFromId), ADD CONSTRAINT FKConversati106925 FOREIGN KEY (userFromId) REFERENCES `User` (userId);
ALTER TABLE ReplyList ADD INDEX FKReplyList682246 (conversationId), ADD CONSTRAINT FKReplyList682246 FOREIGN KEY (conversationId) REFERENCES Conversation (conversationId);
ALTER TABLE Post ADD INDEX FKPost20125 (postId), ADD CONSTRAINT FKPost20125 FOREIGN KEY (postId) REFERENCES ReplyList (conversationId);
ALTER TABLE StayRequest ADD INDEX FKStayReques23627 (conversationId), ADD CONSTRAINT FKStayReques23627 FOREIGN KEY (conversationId) REFERENCES Conversation (conversationId);
