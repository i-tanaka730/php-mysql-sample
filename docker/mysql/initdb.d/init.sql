CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    age INT,
    city VARCHAR(255),
    country VARCHAR(255),
    status VARCHAR(50),
    phone VARCHAR(20)
);

INSERT INTO user (name, email, age, city, country, status, phone) VALUES ('田中太郎', 'tanaka@example.com', 30, '東京', '日本', 'アクティブ', '000-1234-5678');
INSERT INTO user (name, email, age, city, country, status, phone) VALUES ('佐藤花子', 'sato@example.com', 28, '大阪', '日本', '休止中', '111-1111-1111');
INSERT INTO user (name, email, age, city, country, status, phone) VALUES ('鈴木一郎', 'suzuki@example.com', 35, '福岡', '日本', 'アクティブ', '222-2222-2222');