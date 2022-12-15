create table doctors(
    uid VARCHAR (255) NOT NULL,
    first_name VARCHAR (255) NOT NULL,
    last_name VARCHAR (255) NOT NULL,
    root_specializatoin VARCHAR (255),
    primary_specialization VARCHAR (255),
    secondary_specialization VARCHAR (255),
    local_number INT (10),
    mobile_number VARCHAR (255),
    secretary VARCHAR (255),
    clinic_location VARCHAR (255),
    created_at TIMESTAMP DEFAULT current_timestamp,
    updated_at TIMESTAMP DEFAULT current_timestamp ON UPDATE current_timestamp,
    PRIMARY KEY(uid)
);


-- Allergology
insert into doctors(uid, first_name, last_name, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    uuid(),
    "Jenifer Otadoy", 
    "Agustin",
    "Internal Medicine",
    "Allergology and Immunology",
    572,
    "0921-639-4172",
    "Ann",
    "U-MAB 404"
);

insert into doctors(uid, first_name, last_name, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    uuid(),
    "Celine Antoinette Ng", 
    "Yapjuangco",
    "Pediatrics",
    "Pediatric Allergology and Immunology",
    540,
    "0921-225-6191",
    "Emma",
    "U-MAB 321"
);


-- Dermatology
insert into doctors(uid, first_name, last_name, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    uuid(),
    "Ma. Carmela Abad", 
    "Tamayo",
    "Internal Medicine",
    "Dermatology",
    524,
    "0906-959-9814",
    "Lory",
    "U-MAB 323"
);

insert into doctors(uid, first_name, last_name, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    uuid(),
    "Ma. Elena De Luna", 
    "Villacorta",
    "Internal Medicine",
    "Dermatology",
    524,
    "0906-959-9814",
    "Marie",
    "U-MAB 324"
);


-- Gastroentology
insert into doctors(uid, first_name, last_name, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    uuid(),
    "Gian Carlo Alvero", 
    "Carpio",
    "Internal Medicine",
    "Gastroenterology",
    521,
    "0917-621-9024",
    "Banneth",
    "U-MAB 310"
);

insert into doctors(uid, first_name, last_name, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    uuid(),
    "Maria Thea Mulingbayan", 
    "Nido",
    "Internal Medicine",
    "Gastroenterology",
    530,
    "0965-899-3205",
    "Salve",
    "U-MAB 340"
);


-- Neurology
insert into doctors(uid, first_name, last_name, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    uuid(),
    "Anthony Nacu", 
    "Piano",
    "Neurology",
    "Neurology",
    571,
    "0915-265-4305",
    "Erwin",
    "U-MAB 427"
);

insert into doctors(uid, first_name, last_name, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    uuid(),
    "Aida Mendoza", 
    "Salonga",
    "Neurology",
    "Adult Neurology",
    522,
    "0946-857-9527",
    "Jasmin",
    "U-MAB 430"
);


-- Ophthalmology
insert into doctors(uid, first_name, last_name, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    uuid(),
    "Jose Antonio", 
    "Paulino",
    "Adult Ophthalmology",
    "Strabismus",
    570,
    "0916-533-4556",
    "Elvie",
    "U-MAB 432"
);

insert into doctors(uid, first_name, last_name, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    uuid(),
    "Ana Marie", 
    "Santos",
    "Ophthalmology",
    "Cornea and External Eye Diseases",
    563,
    "0921-872-6249",
    "Ana",
    "U-MAB 418"
);