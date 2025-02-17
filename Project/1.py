import pandas as pd
import mysql.connector
from mysql.connector import Error

def read_excel_and_store_in_db(excel_file, host, database, user, password):
    try:
        # Step 1: Read the Excel file using pandas
        df = pd.read_excel(excel_file)

        # Step 2: Connect to the MySQL database
        connection = mysql.connector.connect(
            host=host,
            database=database,
            user=user,
            password=password
        )

        if connection.is_connected():
            print("Successfully connected to the database")

            cursor = connection.cursor()

            # Step 3: Create table if it doesn't exist
            cursor.execute('''
            CREATE TABLE IF NOT EXISTS students (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                reg_number VARCHAR(50) NOT NULL
            );
            ''')

            # Step 4: Iterate over the DataFrame and insert data into the database
            for index, row in df.iterrows():
                name = row['name']
                reg_number = row['reg number']
                print(f"Inserting: {name}, {reg_number}")  # Print to verify data being inserted
                cursor.execute('''
                INSERT INTO students (name, reg_number)
                VALUES (%s, %s);
                ''', (name, reg_number))

            # Commit changes to the database
            connection.commit()
            print(f"Data from {excel_file} successfully written to the database.")

    except Error as e:
        print(f"Error occurred: {e}")
    finally:
        if connection.is_connected():
            cursor.close()
            connection.close()
            print("MySQL connection is closed.")

# Example usage:
excel_file = '1.xlsx'  # Path to your Excel file
host = 'localhost'        # MySQL server host (usually 'localhost')
database = 'school_db'    # Your database name
user = 'root'             # Your MySQL username
password = ''  # Your MySQL password

read_excel_and_store_in_db(excel_file, host, database, user, password)
