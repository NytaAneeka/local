OLD NEW

INSERT INTO darbuotojai (name);
VALUES ('Mindaugas');
NEW.surname='Rimkus';




Updateas turi OLD ir NEW reiksmes

UPDATE darbuotojai SET name= 'Mindaugas';
WHERE id = 500;
OLD.name = Jonaitis;
NEW.name = Mindaugas;


DELETE FROM darbuotojai WHERE id >1;
OLD.


//kinatamieji per mysql rasomi taip:
SET @vardas = (SELECT name FROM darbuotojai WHERE id = 1);
SELECT @vardas;