CREATE TABLE bostader(
	bostadId INT NOT NULL AUTO_INCREMENT,
    bostadPris INT,
    bostadKvm INT,
    bostadRok INT,
    bostadAdress VARCHAR(50),
    bostadOmrade VARCHAR(50),
    bostadBeskrivn VARCHAR(200),
    bostadUserId INT,
    bostadKategoriId INT,
    PRIMARY KEY(bostadId),
    FOREIGN KEY(bostadUserId) REFERENCES users(userId),
    FOREIGN KEY(bostadKategoriId) REFERENCES kategori(kategoriId)
);

CREATE TABLE kategori(
	kategoriId INT NOT NULL AUTO_INCREMENT,
    kategoriNamn VARCHAR(50),
    PRIMARY KEY(kategoriId)
);

CREATE TABLE users(
	userId INT NOT NULL AUTO_INCREMENT,
    userName VARCHAR(50),
    userEmail VARCHAR(50),
    userPassword VARCHAR(250),
    PRIMARY KEY(userId)
);

SELECT* FROM users;
SELECT* FROM users WHERE userId;
SELECT CHAR_LENGTH(userPassword) FROM users;
SELECT* FROM kategori;
SELECT* FROM bostader WHERE bostadUserId = 1;
SELECT* FROM bostader WHERE bostadUserId = 2;



