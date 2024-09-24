CREATE DATABASE citizen_engagement;
USE citizen_engagement;

CREATE TABLE petitions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    signatures INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE polls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE poll_options (
    id INT AUTO_INCREMENT PRIMARY KEY,
    poll_id INT,
    option_text VARCHAR(255) NOT NULL,
    FOREIGN KEY (poll_id) REFERENCES polls(id)
);

CREATE TABLE poll_votes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    poll_id INT,
    option_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (poll_id) REFERENCES polls(id),
    FOREIGN KEY (option_id) REFERENCES poll_options(id)
);

CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert some sample data
INSERT INTO petitions (title, description) VALUES 
('Improve Public Transportation', 'We need better bus routes and more frequent service.'),
('Increase Funding for Education', 'Our schools need more resources to provide quality education.'),
('Implement Recycling Program', 'Let''s make our city greener with a comprehensive recycling program.');

INSERT INTO polls (question) VALUES 
('Should the city invest in more green spaces?'),
('What''s the most important issue in our community?');

INSERT INTO poll_options (poll_id, option_text) VALUES 
(1, 'Yes'),
(1, 'No'),
(1, 'Undecided'),
(2, 'Education'),
(2, 'Healthcare'),
(2, 'Environment'),
(2, 'Economy');