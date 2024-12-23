# Vue.js Feedback System with Laravel Sanctum

This project is a Feedback Management System built using Vue.js for the frontend and Laravel (with Sanctum) for the backend. The system allows users to post feedback, comment on feedback, and manage authentication.

## Features

### User Authentication
- **Registration:** Users can register an account.
- **Login:** Users can log in to their accounts using Laravel Sanctum for secure authentication.
- **Logout:** Authenticated users can log out securely.

### Feedback Management
- **Create Feedback:** Users can submit feedback through the system.
- **Delete Feedback:** Users can delete their own feedback.
- **List Feedback:** Displays a list of all feedback with detailed information.

### Comment Management
- **Add Comment:** Users can comment on feedback.
- **View Comments:** Each feedback item shows associated comments, including:
  - Name of the user who commented.
  - Date of the comment.
- **User Details:** Feedback displays the user who submitted it, along with their name and submission date.

## Technologies Used

### Frontend
- **Vue.js:** For building the user interface.
- **Vue Router:** To manage navigation between different pages/components.
- **Axios:** To handle API requests to the backend.

### Backend
- **Laravel:** For handling server-side logic.
- **Laravel Sanctum:** For managing user authentication and secure API token generation.
- **MySQL:** For database management (optional based on configuration).

## Installation and Setup

### Backend
1. Clone the repository:
    git clone  https://github.com/nawazfdev/web-based-Feedback-Tool.git

2. Install dependencies:
    composer install
 3. Configure environment variables:
   - Rename `.env.example` to `.env`.
   - Update database credentials and other necessary configurations.

4. Run database migrations:
    php artisan migrate
 5. Start the development server:
    php artisan serve
 6. Install Sanctum:
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
   php artisan migrate
## API Endpoints

### Authentication
- `POST /api/auth/register`: Register a new user.
- `POST /api/auth/login`: Log in a user.
- `POST /api/logout`: Log out the authenticated user.

### Feedback
- `POST /api/feedback`: Create feedback.
- `GET /api/feedback`: List all feedback.
- `DELETE /api/feedback/{id}`: Delete feedback.

### Comments
- `POST /api/feedback/{id}/comments`: Add a comment to feedback.
- `GET /api/feedback/{id}/comments`: List all comments for a specific feedback item.

## Usage
1. Register or log in to the system.
2. Submit feedback and view the feedback list.
3. Add comments to feedback and view comments posted by others.
4. Manage feedback and comments with user-specific details.

## Future Improvements
- Implement role-based access control (RBAC).
- Add real-time updates using WebSockets.
- Enhance the UI/UX design.
- Add pagination for feedback and comments.

 
---

Enjoy using the Feedback Management System!
By Muhammad Nawaz

