DROP TABLE IF EXISTS `test`.`students`;
CREATE TABLE  `test`.`students` (
  `id` int(10) NOT NULL PRIMARY KEY auto_increment,
  `username` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `phone` int(13) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

drop table if exists students;
create table students(
  id int(10) not null primary key auto_increment,
  username varchar(20) not null,
  course varchar(20) not null,
  phone varchar(13) not null
);



DROP TABLE IF EXISTS `test15`.`doctorlist`;
CREATE TABLE  `test15`.`doctorlist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `doctor_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `spetielists` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `test15`.`patient_appointment`;
CREATE TABLE  `test15`.`patient_appointment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `age` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `problem` varchar(45) NOT NULL,
  `doctor_id` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `test15`.`patient_prescription`;
CREATE TABLE  `test15`.`patient prescription` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(45) NOT NULL,
  `prescription_date` datetime NOT NULL,
  `doctor_id` varchar(45) NOT NULL,
  `admission_needed` varchar(45) NOT NULL,
  `fee` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



DROP TABLE IF EXISTS `test15`.`prescriptiondetails`;
CREATE TABLE  `test15`.`prescriptiondetails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `medicine` varchar(45) NOT NULL,
  `dose` int(10) unsigned NOT NULL,
  `comments` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `test15`.`admissionpatient`;
CREATE TABLE  `test15`.`admissionpatient` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admission` varchar(45) NOT NULL,
  `patient_id` varchar(45) NOT NULL,
  `bed` varchar(45) NOT NULL,
  `advance` varchar(45) NOT NULL,
  `doctor_id` varchar(45) NOT NULL,
  `bed_price` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `test15`.`admitpatientvisit`;
CREATE TABLE  `test15`.`admitpatientvisit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(45) NOT NULL,
  `doctor_id` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `visit_price` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `test15`.`patienttest`;
CREATE TABLE  `test15`.`patienttest` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admission_id` int(10) unsigned NOT NULL,
  `patient_id` int(10) unsigned NOT NULL,
  `doctor_id` int(10) unsigned NOT NULL,
  `test_id` int(10) unsigned NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `test15`.`patientmedicine`;
CREATE TABLE  `test15`.`patientmedicine` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) unsigned NOT NULL,
  `doctor_id` int(10) unsigned NOT NULL,
  `medicine_id` int(10) unsigned NOT NULL,
  `medicine_price` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `test15`.`beddetails`;
CREATE TABLE  `test15`.`beddetails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `room_no` varchar(45) NOT NULL,
  `code` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `price` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `test15`.`test`;
CREATE TABLE  `test15`.`test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `test_name` varchar(45) NOT NULL,
  `test_rate` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

