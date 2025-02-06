CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash TEXT NOT NULL,
    role VARCHAR(20) CHECK (role IN ('user', 'artist', 'admin')) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_banned BOOLEAN DEFAULT FALSE
);

CREATE TABLE playlists (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    visibility VARCHAR(10) CHECK (visibility IN ('public', 'private')) NOT NULL,
    user_id INTEGER REFERENCES users(id) ON DELETE CASCADE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE songs (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    artist_id INTEGER REFERENCES users(id) ON DELETE CASCADE,
    file_path TEXT NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE playlist_song (
    playlist_id INTEGER REFERENCES playlists(id) ON DELETE CASCADE,
    song_id INTEGER REFERENCES songs(id) ON DELETE CASCADE,
    PRIMARY KEY (playlist_id, song_id)
);

CREATE TABLE likes (
    user_id INTEGER REFERENCES users(id) ON DELETE CASCADE,
    song_id INTEGER REFERENCES songs(id) ON DELETE CASCADE,
    PRIMARY KEY (user_id, song_id)
);

CREATE TABLE follows (
    user_id INTEGER REFERENCES users(id) ON DELETE CASCADE,
    playlist_id INTEGER REFERENCES playlists(id) ON DELETE CASCADE,
    PRIMARY KEY (user_id, playlist_id)
);