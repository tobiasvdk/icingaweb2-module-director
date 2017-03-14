ALTER TABLE icinga_usergroup
  ADD COLUMN zone_id integer DEFAULT NULL;

INSERT INTO director_schema_migration
  (schema_version, migration_time)
  VALUES (129, NOW());
