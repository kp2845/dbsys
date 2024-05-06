create trigger upd_associates AFTER update on Associates
    for each row
    begin
        insert into Associates_Audit (id, old_first_name, old_last_name, old_email) VALUES
        old.EMP_ID, old.FName, old.LName, old.Email);
        end;