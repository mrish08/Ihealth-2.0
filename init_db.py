import os
import psycopg2

conn = psycopg2.connect(
        host="localhost",
        database="iHealth_database",
        user=os.environ['postgres'],
        password=os.environ['123'])

# Open a cursor to perform database operations
cur = conn.cursor()

# Execute a command: this creates a new table
cur.execute('DROP TABLE IF EXISTS medicine;')
cur.execute('CREATE TABLE medicine (medicine_id SERIAL PRIMARY KEY NOT NULL,'
                                'medicine_name varchar (250) not null;'
                                )

                                
# Insert data into the table

cur.execute('INSERT INTO books (medicine_name)'
            'VALUES (%s)',
            ('Tylenol')
            )

conn.commit()

cur.close()
conn.close()