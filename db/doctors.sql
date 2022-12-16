create table doctors(
    uid INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR (255) NOT NULL,
    last_name VARCHAR (255) NOT NULL,
    root_specialization VARCHAR (255),
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
insert into doctors(first_name, last_name, root_specialization, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    "Jenifer Otadoy", 
    "Agustin",
    "Allergology",
    "Internal Medicine",
    "Allergology and Immunology",
    572,
    "0921-639-4172",
    "Ann",
    "U-MAB 404"
);

insert into doctors(first_name, last_name, root_specialization, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    "Celine Antoinette Ng", 
    "Yapjuangco",
    "Allergology",
    "Pediatrics",
    "Pediatric Allergology and Immunology",
    540,
    "0921-225-6191",
    "Emma",
    "U-MAB 321"
);


-- Dermatology
insert into doctors(first_name, last_name, root_specialization, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    "Ma. Carmela Abad", 
    "Tamayo",
    "Dermatology",
    "Internal Medicine",
    "Dermatology",
    524,
    "0906-959-9814",
    "Lory",
    "U-MAB 323"
);

insert into doctors(first_name, last_name, root_specialization, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    "Ma. Elena De Luna", 
    "Villacorta",
    "Dermatology",
    "Internal Medicine",
    "Dermatology",
    524,
    "0906-959-9814",
    "Marie",
    "U-MAB 324"
);


-- Gastroentology
insert into doctors(first_name, last_name, root_specialization, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    "Gian Carlo Alvero", 
    "Carpio",
    "Gastroenterology",
    "Internal Medicine",
    "Gastroenterology",
    521,
    "0917-621-9024",
    "Banneth",
    "U-MAB 310"
);

insert into doctors(first_name, last_name, root_specialization, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    "Maria Thea Mulingbayan", 
    "Nido",
    "Gastroenterology",
    "Internal Medicine",
    "Gastroenterology",
    530,
    "0965-899-3205",
    "Salve",
    "U-MAB 340"
);


-- Neurology
insert into doctors(first_name, last_name, root_specialization, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    "Anthony Nacu", 
    "Piano",
    "Neurology",
    "Neurology",
    "Neurology",
    571,
    "0915-265-4305",
    "Erwin",
    "U-MAB 427"
);

insert into doctors(first_name, last_name, root_specialization, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    "Aida Mendoza", 
    "Salonga",
    "Neurology",
    "Neurology",
    "Adult Neurology",
    522,
    "0946-857-9527",
    "Jasmin",
    "U-MAB 430"
);


-- Ophthalmology
insert into doctors(first_name, last_name, root_specialization, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    "Jose Antonio", 
    "Paulino",
    "Ophthalmology",
    "Adult Ophthalmology",
    "Strabismus",
    570,
    "0916-533-4556",
    "Elvie",
    "U-MAB 432"
);

insert into doctors(first_name, last_name, root_specialization, primary_specialization, secondary_specialization, local_number, mobile_number, secretary, clinic_location)
values(
    "Ana Marie", 
    "Santos",
    "Ophthalmology",
    "Ophthalmology",
    "Cornea and External Eye Diseases",
    563,
    "0921-872-6249",
    "Ana",
    "U-MAB 418"
);