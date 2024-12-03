# Enrollment System: Models and Fillables

## Key Models in an Enrollment System

### 1. **Student**
| **Attribute**          | **Description**                  |
|-------------------------|----------------------------------|
| ID                     | Primary Key                     |
| Name                   | First name, last name, middle name |
| Date of Birth          | Student's date of birth         |
| Gender                 | Male/Female/Other               |
| Address                | Full address                    |
| Contact Information    | Phone, email                    |
| Enrollment Status      | Active, inactive, graduated     |
| Guardian/Parent Details| Guardian information for minors |

**Relationships**:
- Many-to-Many with Courses (through an **Enrollment** model)

---

### 2. **Course**
| **Attribute**          | **Description**                  |
|-------------------------|----------------------------------|
| ID                     | Primary Key                     |
| Course Name            | Name of the course              |
| Course Code            | Unique course identifier        |
| Description            | Brief description of the course |
| Units/Credit Hours     | Number of units/credits         |
| Department             | Related academic department     |
| Instructor/Professor ID| Foreign key to Instructor model |

**Relationships**:
- Many-to-Many with Students (through an **Enrollment** model)

---

### 3. **Instructor/Staff**
| **Attribute**          | **Description**                  |
|-------------------------|----------------------------------|
| ID                     | Primary Key                     |
| Name                   | Instructor/staff name           |
| Contact Information    | Phone, email                    |
| Department             | Assigned department             |
| Role                   | Role within the system (e.g., instructor, admin) |

**Relationships**:
- One-to-Many with Courses (Instructor teaches multiple courses)

---

### 4. **Enrollment**
| **Attribute**          | **Description**                  |
|-------------------------|----------------------------------|
| ID                     | Primary Key                     |
| Student ID             | Foreign key to Student model    |
| Course ID              | Foreign key to Course model     |
| Enrollment Date        | Date of enrollment              |
| Semester/Term          | Term in which enrolled          |
| Grade                  | Grade received (if applicable)  |

**Relationships**:
- Many-to-One with Students
- Many-to-One with Courses

---

### 5. **Class Schedule**
| **Attribute**          | **Description**                  |
|-------------------------|----------------------------------|
| ID                     | Primary Key                     |
| Course ID              | Foreign key to Course model     |
| Day/Time               | Scheduled day and time          |
| Room                   | Classroom location              |
| Instructor ID          | Foreign key to Instructor model |

**Relationships**:
- One-to-One or One-to-Many with Courses

---

### 6. **Payment/Finance**
| **Attribute**          | **Description**                  |
|-------------------------|----------------------------------|
| ID                     | Primary Key                     |
| Student ID             | Foreign key to Student model    |
| Amount                 | Payment amount                  |
| Payment Date           | Date of payment                 |
| Payment Method         | Cash, credit card, scholarship  |
| Outstanding Balance    | Amount due                      |

**Relationships**:
- Many-to-One with Students

---

### 7. **Department/Program**
| **Attribute**          | **Description**                  |
|-------------------------|----------------------------------|
| ID                     | Primary Key                     |
| Name                   | Name of the department          |
| Code                   | Department code                 |
| Head of Department     | Foreign key to Instructor model |

---

## Common Fillable Forms

### 1. **Student Registration Form**
| **Field**               |
|--------------------------|
| Name                    |
| Date of Birth           |
| Gender                  |
| Address                 |
| Contact Information     |
| Guardian Information    |
| Program/Department      |

---

### 2. **Course Enrollment Form**
| **Field**               |
|--------------------------|
| Student Name/ID         |
| Course Selection        |
| Semester/Term           |
| Enrollment Date         |

---

### 3. **Instructor Assignment Form**
| **Field**               |
|--------------------------|
| Instructor Name/ID      |
| Course Name/ID          |
| Schedule (Day/Time)     |

---

### 4. **Payment Form**
| **Field**               |
|--------------------------|
| Student Name/ID         |
| Payment Amount          |
| Payment Date            |
| Method (dropdown)       |

---

### 5. **Schedule/Timetable Form**
| **Field**               |
|--------------------------|
| Course Name/ID          |
| Day/Time                |
| Room                    |
| Instructor Name/ID      |

---

### 6. **Grade Submission Form**
| **Field**               |
|--------------------------|
| Student Name/ID         |
| Course Name/ID          |
| Grade                   |

---

### 7. **Department/Program Management Form**
| **Field**               |
|--------------------------|
| Department Name         |
| Head of Department      |
| Courses Offered         |

---

## Workflow Example
1. **Student Registration**: The student fills in the registration form, creating a record in the **Student** model.
2. **Course Enrollment**: The student selects courses to enroll in, populating the **Enrollment** model.
3. **Payment**: Payments are processed, updating the **Payment** model.
4. **Grade Management**: After the term, grades are added to the **Enrollment** model.

Each form directly interacts with the models, ensuring data integrity and streamlined operations.
