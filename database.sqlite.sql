BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "bills" (
	"userID"	integer,
	"billAmount"	integer,
	"unit"	integer,
	"lastDate"	varchar
);
CREATE TABLE IF NOT EXISTS "banks" (
	"Name"	varchar,
	"cardNumber"	varchar,
	"amount"	integer,
	"password"	varchar,
	"created_at"	datetime,
	"updated_at"	datetime
);
CREATE TABLE IF NOT EXISTS "information" (
	"userID"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"name"	varchar NOT NULL,
	"email"	varchar NOT NULL,
	"nrc"	varchar NOT NULL,
	"phone"	varchar NOT NULL,
	"address"	varchar NOT NULL,
	"password"	varchar NOT NULL,
	"created_at"	datetime,
	"updated_at"	datetime
);
CREATE TABLE IF NOT EXISTS "failed_jobs" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"connection"	text NOT NULL,
	"queue"	text NOT NULL,
	"payload"	text NOT NULL,
	"exception"	text NOT NULL,
	"failed_at"	datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS "password_resets" (
	"email"	varchar NOT NULL,
	"token"	varchar NOT NULL,
	"created_at"	datetime
);
CREATE TABLE IF NOT EXISTS "users" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"name"	varchar NOT NULL,
	"email"	varchar NOT NULL,
	"email_verified_at"	datetime,
	"password"	varchar NOT NULL,
	"remember_token"	varchar,
	"created_at"	datetime,
	"updated_at"	datetime
);
CREATE TABLE IF NOT EXISTS "e_admins" (
	"userID"	integer NOT NULL,
	"billAmount"	integer NOT NULL,
	"unit"	integer NOT NULL,
	"lastDate"	varchar NOT NULL
);
CREATE TABLE IF NOT EXISTS "migrations" (
	"id"	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	"migration"	varchar NOT NULL,
	"batch"	integer NOT NULL
);
INSERT INTO "bills" VALUES (NULL,0,NULL,NULL);
INSERT INTO "bills" VALUES (1,3500,100,'12/3/2019');
INSERT INTO "banks" VALUES (NULL,NULL,NULL,NULL,'2019-10-04 11:21:49','2019-10-04 11:21:49');
INSERT INTO "banks" VALUES (NULL,NULL,NULL,NULL,'2019-10-04 11:23:13','2019-10-04 11:23:13');
INSERT INTO "banks" VALUES (NULL,NULL,NULL,NULL,'2019-10-04 11:23:34','2019-10-04 11:23:34');
INSERT INTO "banks" VALUES (NULL,NULL,NULL,NULL,'2019-10-04 11:23:37','2019-10-04 11:23:37');
INSERT INTO "migrations" VALUES (15,'2019_10_03_113832_create_e_admins_table',2);
INSERT INTO "migrations" VALUES (54,'2014_10_12_000000_create_users_table',3);
INSERT INTO "migrations" VALUES (55,'2014_10_12_100000_create_password_resets_table',3);
INSERT INTO "migrations" VALUES (56,'2019_08_19_000000_create_failed_jobs_table',3);
INSERT INTO "migrations" VALUES (57,'2019_09_27_163447_create_information_table',3);
INSERT INTO "migrations" VALUES (58,'2019_10_03_114621_create_banks_table',3);
INSERT INTO "migrations" VALUES (59,'2019_10_03_152613_create_bills_table',3);
CREATE INDEX IF NOT EXISTS "password_resets_email_index" ON "password_resets" (
	"email"
);
CREATE UNIQUE INDEX IF NOT EXISTS "users_email_unique" ON "users" (
	"email"
);
COMMIT;
