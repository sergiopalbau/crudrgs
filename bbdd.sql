USE rgsbbdd;

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    area VARCHAR(255) NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE cards (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_id INT NOT NULL,
    img VARCHAR(255) NOT NULL,
    txt_sp VARCHAR(255) NOT NULL,
    txt_en VARCHAR(255) NOT NULL,
    txt_fr VARCHAR(255) NOT NULL,    
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY admin_key(admin_id) REFERENCES admins(id)
) CHARSET=utf8mb4;

CREATE TABLE readers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    area VARCHAR(255) NOT NULL,
    created DATETIME,
    modified DATETIME,    
    FOREIGN KEY admin_key2(admin_id) REFERENCES admins(id)
) CHARSET=utf8mb4;


CREATE TABLE uses (
    card_id INT NOT NULL,
    reader_id INT NOT NULL,
    PRIMARY KEY (card_id, reader_id),
    FOREIGN KEY card_key(card_id) REFERENCES cards(id),
    FOREIGN KEY readers_key(reader_id) REFERENCES readers(id)
);

