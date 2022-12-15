create table appointments(
    uid VARCHAR (255) NOT NULL,
    user_id VARCHAR (255) NOT NULL,
    schedule_id VARCHAR (255) NOT NULL,
    date DATE NOT NULL,
    is_first_visit BOOLEAN NOT NULL,
    status INT(1) NOT NULL,
    first_name VARCHAR (255) NOT NULL,
    last_name VARCHAR (255) NOT NULL,
    date_of_birth DATE NOT NULL,
    sex BOOLEAN NOT NULL,
    email VARCHAR (255) NOT NULL,
    mobile_number VARCHAR (255) NOT NULL,
    created_at TIMESTAMP DEFAULT current_timestamp,
    updated_at TIMESTAMP DEFAULT current_timestamp ON UPDATE current_timestamp,
    PRIMARY KEY(uid), 
    FOREIGN KEY(user_id) REFERENCES users(uid),
    FOREIGN KEY(schedule_id) REFERENCES doctor_schedules(uid)
);