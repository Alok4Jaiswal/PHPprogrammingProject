CREATE TABLE cricket_players (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  role VARCHAR(50),
  team VARCHAR(100),
  age INT
);


INSERT INTO cricket_players (name, role, team, age) VALUES
('Virat Kohli', 'Batsman', 'India', 35),
('Pat Cummins', 'Bowler', 'Australia', 31),
('Ben Stokes', 'All-rounder', 'England', 33);

