CREATE DATABASE culture_partage;
use culture_partage;
-- Creation des tables
CREATE TABLE users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    f_name VARCHAR(50) NOT NULL,
    l_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    password_hashed VARCHAR(255) NOT NULL,
    roles ENUM('Admin', 'Author', 'User') DEFAULT 'User',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    id_category INT PRIMARY KEY AUTO_INCREMENT,
    name_category VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE articles (
    id_article INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    textbox TEXT NOT NULL,
    statut ENUM('draft', 'pending', 'published', 'rejected') DEFAULT 'draft',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    id_user INT NOT NULL,
    id_category INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES users(id_user) ON DELETE CASCADE,
    FOREIGN KEY (id_category) REFERENCES categories(id_category) ON DELETE CASCADE
);

-- Requêtes SQL demandées

-- 1. Nombre total d'articles par catégorie
CREATE VIEW articles_per_category AS
SELECT c.name AS category_name, COUNT(a.id) AS article_count
FROM categories c
LEFT JOIN articles a ON c.id = a.category_id
WHERE a.status = 'published'
GROUP BY c.id, c.name;

-- 2. Auteurs les plus actifs
CREATE VIEW active_authors AS
SELECT u.name AS author_name, COUNT(a.id) AS article_count
FROM users u
LEFT JOIN articles a ON u.id = a.user_id
WHERE a.status = 'published'
GROUP BY u.id, u.name
ORDER BY article_count DESC;

-- 3. Moyenne d'articles par catégorie
CREATE VIEW avg_articles_per_category AS
SELECT AVG(article_count) AS average_articles
FROM (
    SELECT category_id, COUNT(*) AS article_count
    FROM articles
    WHERE status = 'published'
    GROUP BY category_id
) AS category_counts;

-- 4. Vue des articles récents (30 derniers jours)
CREATE VIEW recent_articles AS
SELECT a.*, u.name AS author_name, c.name AS category_name
FROM articles a
JOIN users u ON a.user_id = u.id
JOIN categories c ON a.category_id = c.id
WHERE a.status = 'published'
AND a.created_at >= DATE_SUB(CURRENT_DATE, INTERVAL 30 DAY)
ORDER BY a.created_at DESC;

-- 5. Catégories sans articles
CREATE VIEW empty_categories AS
SELECT c.*
FROM categories c
LEFT JOIN articles a ON c.id = a.category_id
WHERE a.id IS NULL;