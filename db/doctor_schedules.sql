create table doctor_schedules(
    uid VARCHAR (255) NOT NULL,
    doctor_id VARCHAR (255) NOT NULL, 
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
insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    2,
    "14:00:00",
    "16:00:00",
    "fc037cbf-77ad-11ed-bbe6-8c1645b43341"
);

insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    6,
    "14:00:00",
    "16:00:00",
    "fc037cbf-77ad-11ed-bbe6-8c1645b43341"
);

-- Yapjuangco
insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    3,
    "11:00:00",
    "14:00:00",
    "fe3c678f-77ad-11ed-bbe6-8c1645b43341"
);

insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    5,
    "13:00:00",
    "15:00:00",
    "fe3c678f-77ad-11ed-bbe6-8c1645b43341"
);


-- Dermatology
-- Tamayo
insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    1,
    "15:00:00",
    "17:00:00",
    "008942fe-77ae-11ed-bbe6-8c1645b43341"
);

insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    3,
    "15:00:00",
    "17:00:00",
    "008942fe-77ae-11ed-bbe6-8c1645b43341"
);

-- Villacorta
insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    4,
    "10:00:00",
    "12:00:00",
    "02f868e6-77ae-11ed-bbe6-8c1645b43341"
);

insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    6,
    "11:00:00",
    "13:00:00",
    "02f868e6-77ae-11ed-bbe6-8c1645b43341"
);


-- Gastroenterology
-- Carpio
insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    2,
    "09:00:00",
    "11:00:00",
    "0539dc69-77ae-11ed-bbe6-8c1645b43341"
);

insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    4,
    "09:00:00",
    "11:00:00",
    "0539dc69-77ae-11ed-bbe6-8c1645b43341"
);

-- Nido
insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    3,
    "13:00:00",
    "15:00:00",
    "0732238d-77ae-11ed-bbe6-8c1645b43341"
);

insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    6,
    "13:00:00",
    "15:00:00",
    "0732238d-77ae-11ed-bbe6-8c1645b43341"
);


-- Neurology
-- Piano
insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    1,
    "15:00:00",
    "17:00:00",
    "097ab51c-77ae-11ed-bbe6-8c1645b43341"
);

insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    6,
    "15:00:00",
    "17:00:00",
    "097ab51c-77ae-11ed-bbe6-8c1645b43341"
);

-- Salonga
insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    3,
    "13:00:00",
    "17:00:00",
    "db7ca5fb-77af-11ed-bbe6-8c1645b43341"
);

insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    6,
    "13:00:00",
    "17:00:00",
    "db7ca5fb-77af-11ed-bbe6-8c1645b43341"
);


-- Ophthalmology
-- Paulino
insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    4,
    "08:00:00",
    "10:00:00",
    "0d16b466-77ae-11ed-bbe6-8c1645b43341"
);

insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    6,
    "15:00:00",
    "17:00:00",
    "0d16b466-77ae-11ed-bbe6-8c1645b43341"
);

-- Santos
insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    2,
    "09:00:00",
    "12:00:00",
    "0ee7db4d-77ae-11ed-bbe6-8c1645b43341"
);

insert into doctor_schedules(uid, day, start_time, end_time, doctor_id)
values(
    uuid(),
    3,
    "08:00:00",
    "10:00:00",
    "0ee7db4d-77ae-11ed-bbe6-8c1645b43341"
);