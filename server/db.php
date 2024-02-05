CREATE TABLE Faculty (
    Faculty_ID INT PRIMARY KEY AUTO_INCREMENT,
    User_ID INT NOT NULL,
    Full_Name VARCHAR(255) NOT NULL,
    Role VARCHAR(100), -- E.g., Professor, Lecturer, etc.
    -- Other faculty-related fields...
    FOREIGN KEY (User_ID) REFERENCES Users (User_ID)
);

CREATE TABLE Staff (
    Staff_ID INT PRIMARY KEY AUTO_INCREMENT,
    User_ID INT NOT NULL,
    Full_Name VARCHAR(255) NOT NULL,
    Role VARCHAR(100), -- E.g., Administrator, Support Staff, etc.
    -- Other staff-related fields...
    FOREIGN KEY (User_ID) REFERENCES Users (User_ID)
);
CREATE TABLE Courses (
    Course_ID INT PRIMARY KEY AUTO_INCREMENT,
    Course_Code VARCHAR(10) NOT NULL,
    Course_Title VARCHAR(255) NOT NULL,
    Description TEXT,
    Faculty_ID INT, -- Foreign key to the Faculty table
    -- Other course-related fields...
    FOREIGN KEY (Faculty_ID) REFERENCES Faculty (Faculty_ID)
);
CREATE TABLE Enrollments (
    Enrollment_ID INT PRIMARY KEY AUTO_INCREMENT,
    Student_ID INT NOT NULL,
    Course_ID INT NOT NULL,
    Enrollment_Date DATE NOT NULL,
    -- Other enrollment-related fields...
    FOREIGN KEY (Student_ID) REFERENCES Students (Student_ID),
    FOREIGN KEY (Course_ID) REFERENCES Courses (Course_ID)
);
CREATE TABLE FinancialTransactions (
    Transaction_ID INT PRIMARY KEY AUTO_INCREMENT,
    Student_ID INT NOT NULL,
    Transaction_Date DATE NOT NULL,
    Transaction_Type ENUM('payment', 'refund', 'other') NOT NULL,
    Amount DECIMAL(10, 2) NOT NULL,
    Description TEXT,
    -- Other financial transaction-related fields...
    FOREIGN KEY (Student_ID) REFERENCES Students (Student_ID)
);
