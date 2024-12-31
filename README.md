# jspm-syntax_squad
Repository for Admission Management System
This is the repo for developing Admission Management system

Requirement Gathering for Admission Management System

1. User Roles:

Student: To fill out the application form, upload documents, and accept seat allocation.

Admin (College): To manage seat allocation, verify documents, and process offline tasks.


2. Workflow:

1. Application Form Submission:

Students fill out basic details (name, contact info, academic details, etc.).



2. Vacancy Check:

System checks seat availability in the selected college and program.

If seats are available, the application proceeds further.



3. Document Submission:

Students upload required documents (e.g., mark sheets, ID proofs).

System validates the documents (manual or automated).



4. Seat Allocation:

Based on eligibility and availability, a seat is allocated.

Students can choose to "Freeze" the allocation or decline it.



5. Allocation Letter Generation:

Once the seat is frozen, an allocation letter is generated and shared with the student.



6. Offline Processing:

Further formalities (fee payment, verification, etc.) are handled offline by the college.




3. Functional Requirements:

Application form with validation.

Vacancy management and real-time seat availability check.

Document upload and management system.

Seat allocation engine based on predefined criteria.

Allocation letter generation.

Admin dashboard for college staff.


4. Non-Functional Requirements:

Scalability: Handle a large number of applicants simultaneously.

Security: Ensure data protection and document privacy.

User-Friendly Interface: Easy navigation for students and admins.


5. Technology Suggestions:

Frontend: React or Angular (for user interface).

Backend: Node.js, Python, or Java.

Database: MySQL or MongoDB.

Document Storage: AWS S3 or Google Cloud Storage.

