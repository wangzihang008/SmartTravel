create table admin_user (
    id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name varchar(80) not null,
    user_pwd varchar(255) not null,
    careate_date timestamp,
    modify_date timestamp,
    log_date timestamp,
    log_num smallint(6),
    failure_num smallint(6),
    last_failure timestamp,
    is_active smallint(6)
);