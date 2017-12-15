DROP TABLE IF EXISTS OneTimeLinks;
CREATE TABLE OneTimeLinks (
    token CHAR(40) NOT NULL,
    /*username VARCHAR(45) NOT NULL,*/
    tstamp INTEGER UNSIGNED NOT NULL,
    PRIMARY KEY(token)
);