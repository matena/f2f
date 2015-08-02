CREATE TABLE `User` (
  userId              int(10) NOT NULL AUTO_INCREMENT comment 'Auto-incrementing primary key', 
  login               varchar(20) NOT NULL UNIQUE comment 'Login name to the system', 
  password            varchar(255) NOT NULL, 
  email               varchar(255) NOT NULL UNIQUE comment 'E-mail address for the account. This will also be used for retrieving lost password.', 
  createDate          date NOT NULL, 
  lastLogin           datetime NOT NULL, 
  phone               varchar(20), 
  coordLat            varchar(20), 
  coordLon            varchar(20), 
  keywords            varchar(1023), 
  galleryLink         varchar(1023), 
  displayName         varchar(30) NOT NULL, 
  premiumExpiry       datetime NULL comment 'This field represents the subscription to premium features expiration. This field is Null when the user does not have a premium account.', 
  userLevel           tinyint NOT NULL, 
  profileLastReviewed datetime NULL, 
  PRIMARY KEY (userId), 
  UNIQUE INDEX (userId)) CHARACTER SET UTF8;
CREATE TABLE Member (
  memberId    int(10) NOT NULL AUTO_INCREMENT, 
  name        int(10) NOT NULL, 
  email       int(10) NOT NULL UNIQUE, 
  phone       varchar(20), 
  galleryLink varchar(1023), 
  birthday    date, 
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
  postId    int(10) NOT NULL, 
  text      varchar(2047) NOT NULL, 
  title     varchar(127) NOT NULL, 
  timeStamp datetime NOT NULL, 
  PRIMARY KEY (postId), 
  UNIQUE INDEX (postId)) CHARACTER SET UTF8;
CREATE TABLE BlogEntries (
  blogId      int(10) NOT NULL UNIQUE, 
  postId      int(10) NOT NULL UNIQUE, 
  mapEntry    varchar(1023), 
  galleryLink varchar(1023)) CHARACTER SET UTF8;
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
  eventDate datetime NOT NULL, 
  userId    int(10) NOT NULL, 
  PRIMARY KEY (eventId)) CHARACTER SET UTF8;
CREATE TABLE HostPlace (
  hostUserId       int(10) NOT NULL, 
  available        tinyint(1) DEFAULT 1 NOT NULL, 
  numPerson        int(11), 
  homeschooling    tinyint(1), 
  foodReqire       tinyint comment '0 - all
1 - vegetarian
2 - vegan
3 - vitarian', 
  smoking          tinyint(1) NOT NULL, 
  wheelChairAccess tinyint(1), 
  hasPets          tinyint(1), 
  acceptsPets      tinyint(1), 
  ownBedroon       tinyint(1), 
  outdoorSpace     tinyint(1), 
  hasWiFi          tinyint(1), 
  publicTransport  tinyint(1), 
  pickupOk         tinyint(1), 
  wheelchairOk     tinyint(1), 
  medicalServNear  tinyint(1), 
  hasSwimming      tinyint(1), 
  hasBeach         tinyint(1), 
  hasShopNear      tinyint(1), 
  limitations      varchar(1023), 
  sights           varchar(2047), 
  keywords         varchar(100), 
  coDetector       tinyint(1), 
  firstAid         tinyint(1), 
  bareNecessities  tinyint(1), 
  smokeAlarm       tinyint(1), 
  longStay         tinyint(1), 
  lastEdited       datetime NULL, 
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
  finishDate     date) CHARACTER SET UTF8;
CREATE TABLE SocialLogin (
  userId                    int(10) NOT NULL, 
  providerId                int(10) NOT NULL, 
  socialUserName            varchar(255) NOT NULL, 
  SocialProvidersproviderId int(10), 
  PRIMARY KEY (userId, 
  providerId), 
  UNIQUE INDEX (userId)) CHARACTER SET UTF8;
CREATE TABLE SocialProviders (
  providerId   int(10) NOT NULL AUTO_INCREMENT, 
  providerName varchar(255), 
  providerURL  varchar(255), 
  PRIMARY KEY (providerId), 
  UNIQUE INDEX (providerId)) CHARACTER SET UTF8;
ALTER TABLE FamilyMembers ADD INDEX FKFamilyMemb286753 (userId), ADD CONSTRAINT FKFamilyMemb286753 FOREIGN KEY (userId) REFERENCES `User` (userId);
ALTER TABLE FamilyMembers ADD INDEX FKFamilyMemb316795 (memberId), ADD CONSTRAINT FKFamilyMemb316795 FOREIGN KEY (memberId) REFERENCES Member (memberId);
ALTER TABLE BlogEntries ADD INDEX FKBlogEntrie198559 (postId), ADD CONSTRAINT FKBlogEntrie198559 FOREIGN KEY (postId) REFERENCES Post (postId);
ALTER TABLE BlogEntries ADD INDEX FKBlogEntrie436693 (blogId), ADD CONSTRAINT FKBlogEntrie436693 FOREIGN KEY (blogId) REFERENCES Blogs (blogId);
ALTER TABLE Conversation ADD INDEX FKConversati385998 (userToId), ADD CONSTRAINT FKConversati385998 FOREIGN KEY (userToId) REFERENCES `User` (userId);
ALTER TABLE Conversation ADD INDEX FKConversati106925 (userFromId), ADD CONSTRAINT FKConversati106925 FOREIGN KEY (userFromId) REFERENCES `User` (userId);
ALTER TABLE ReplyList ADD INDEX FKReplyList682246 (conversationId), ADD CONSTRAINT FKReplyList682246 FOREIGN KEY (conversationId) REFERENCES Conversation (conversationId);
ALTER TABLE Post ADD INDEX FKPost20125 (postId), ADD CONSTRAINT FKPost20125 FOREIGN KEY (postId) REFERENCES ReplyList (conversationId);
ALTER TABLE StayRequest ADD INDEX FKStayReques23627 (conversationId), ADD CONSTRAINT FKStayReques23627 FOREIGN KEY (conversationId) REFERENCES Conversation (conversationId);
ALTER TABLE HostPlace ADD INDEX FKHostPlace560642 (hostUserId), ADD CONSTRAINT FKHostPlace560642 FOREIGN KEY (hostUserId) REFERENCES `User` (userId);
ALTER TABLE SocialLogin ADD INDEX FKSocialLogi472902 (userId), ADD CONSTRAINT FKSocialLogi472902 FOREIGN KEY (userId) REFERENCES `User` (userId);
ALTER TABLE SocialLogin ADD INDEX FKSocialLogi22105 (SocialProvidersproviderId), ADD CONSTRAINT FKSocialLogi22105 FOREIGN KEY (SocialProvidersproviderId) REFERENCES SocialProviders (providerId);
