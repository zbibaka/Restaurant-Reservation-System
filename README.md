# 🍽️ Restaurant Reservation System

Hi there! 👋 Welcome to the repository for my **Restaurant Reservation System**.

This project isn't just lines of code; it's a solution designed to bring order to the chaos of a busy restaurant. Whether it's managing bookings for a romantic dinner or organizing tables for a big family reunion, this app is here to help staff focus on what matters most: the customers.

## 📖 About The Project

I built this project using **Symfony 7** with a clear goal: to make restaurant management simple and efficient. The idea is to have a centralized place where you can see who is coming, when, and where they will sit.

It handles the core aspects of a shift:
*   **Clients**: Keeping track of our lovely guests.
*   **Tables**: Knowing your floor plan inside out.
*   **Reservations**: The heartbeat of the service.

## ✨ Features

Here is what you can do with it:

*   **📅 Managing Reservations**: Create, update, and track bookings. You can set the date, time, and party size easily.
*   **🪑 Table Organization**: Manage your tables, their capacity, and their status (is it free? reserved?).
*   **👥 Client Records**: Keep a simple record of your clients to provide better service.

## 📸 Screenshots

I know a picture is worth a thousand words! Since I'm always updating the look and feel, I've left this space for you to see what it actually looks like.
<img width="1337" height="603" alt="Capture123" src="https://github.com/user-attachments/assets/c5ab4ded-f7ed-4014-b96f-37881b0a598d" />


### 🔹 The Dashboard
*A view of the main dashboard where the magic happens.*
<!-<img width="1317" height="528" alt="1234" src="https://github.com/user-attachments/assets/52058b55-f7a6-415f-a894-71d8689f26b6" />
*(Place your screenshot link above)*

### 🔹 Making a Reservation
*The simple form for adding a new booking.*
<img width="1352" height="574" alt="reser" src="https://github.com/user-attachments/assets/838788bf-982a-47ac-bcfe-51fbdb72e2b5" />

### 🔹 Table View
*See at a glance which tables are free.*
<img width="1349" height="570" alt="table" src="https://github.com/user-attachments/assets/a5644e33-2be0-48be-9abe-53fffdf340d6" />

### 🔹 Table Client
*See at the Clients .*
<img width="1335" height="537" alt="Client" src="https://github.com/user-attachments/assets/cc0b771c-a58d-41c0-b005-9d684d2b99dc" />




## 🚀 Getting Started

Want to run this locally? Here is the quick version:

1.  **Clone the repo**
    ```bash
    git clone https://github.com/your-username/your-repo-name.git](https://github.com/zbibaka/Restaurant-Reservation-System
    ```

2.  **Install Dependencies**
    I use Composer for PHP dependencies.
    ```bash
    composer install
    ```

3.  **Set up the Database**
    Make sure your `.env` file is configured for your database, then run:
    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    ```

4.  **Start the Server**
    ```bash
    symfony server:start
    ```

And you are good to go! Happy coding! 🧑‍🍳
