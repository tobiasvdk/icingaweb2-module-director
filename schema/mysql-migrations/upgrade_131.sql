ALTER TABLE icinga_usergroup
  ADD COLUMN zone_id INT(10) UNSIGNED DEFAULT NULL after display_name;

INSERT INTO director_schema_migration
  (schema_version, migration_time)
  VALUES (131, NOW());
