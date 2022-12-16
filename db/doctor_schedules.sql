create table doctor_schedules(
    uid INT NOT NULL AUTO_INCREMENT,
    doctor_id INT NOT NULL, 
    day INT (1) NOT NULL, 
    start_time TIME NOT NULL, 
    end_time TIME NOT NULL, 
    created_at TIMESTAMP DEFAULT current_timestamp,
    updated_at TIMESTAMP DEFAULT current_timestamp ON UPDATE current_timestamp,
    PRIMARY KEY(uid), 
    FOREIGN KEY(doctor_id) REFERENCES doctors(uid)
);


-- Allergology
-- Agustin
insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    2,
    1,
    "14:00:00",
    "16:00:00"
);

insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    6,
    1,
    "14:00:00",
    "16:00:00"
);

-- Yapjuangco
insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    3,
    2,
    "11:00:00",
    "14:00:00"
);

insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    5,
    2,
    "13:00:00",
    "15:00:00"
);


-- Dermatology
-- Tamayo
insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    1,
    3,
    "15:00:00",
    "17:00:00"
);

insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    3,
    3,
    "15:00:00",
    "17:00:00"
);

-- Villacorta
insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    4,
    4,
    "10:00:00",
    "12:00:00"
);

insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    6,
    4,
    "11:00:00",
    "13:00:00"
);


-- Gastroenterology
-- Carpio
insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    2,
    5,
    "09:00:00",
    "11:00:00"
);

insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    4,
    5,
    "09:00:00",
    "11:00:00"
);

-- Nido
insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    3,
    6,
    "13:00:00",
    "15:00:00"
);

insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    6,
    6,
    "13:00:00",
    "15:00:00"
);


-- Neurology
-- Piano
insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    1,
    7,
    "15:00:00",
    "17:00:00"
);

insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    6,
    7,
    "15:00:00",
    "17:00:00"
);

-- Salonga
insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    3,
    8,
    "13:00:00",
    "17:00:00"
);

insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    6,
    8,
    "13:00:00",
    "17:00:00"
);


-- Ophthalmology
-- Paulino
insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    4,
    9,
    "08:00:00",
    "10:00:00"
);

insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    6,
    9,
    "15:00:00",
    "17:00:00"
);

-- Santos
insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    2,
    10,
    "09:00:00",
    "12:00:00"
);

insert into doctor_schedules(day, doctor_id, start_time, end_time)
values(
    3,
    10,
    "08:00:00",
    "10:00:00"
);