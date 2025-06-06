<h1>Laravel CRUD Project Setup Guide</h1>
<p>Follow these steps to set up the project on your local environment.</p>

<p><strong>Step 1: Clone the Repository</strong></p>
<p>First, clone the project repository to your local machine:</p>
<pre><code>git clone https://github.com/ddonatas/laravel_hanoi
cd laravel_hanoi</code></pre>

<p><strong>Step 2: Install Dependencies</strong></p>
<p>Install PHP and JavaScript dependencies using Composer and NPM:</p>
<pre><code>composer install
npm install
npm run dev</code></pre>

<p><strong>Step 3: Set Up the .env File</strong></p>
<p>Copy the example <code>.env</code> file to create a working <code>.env</code> file for your environment:</p>
<pre><code>cp .env.example .env</code></pre>
<p><strong>Note</strong>: The <code>.env</code> file is <strong>not included in the repository</strong> for security reasons. The <code>.env.example</code> file is provided to guide you in setting up your local environment.</p>

<p><strong>Step 4: Generate an Application Key</strong></p>
<p>Generate a unique application key that Laravel will use for session encryption:</p>
<pre><code>php artisan key:generate</code></pre>

<p><strong>Step 5: Set Up the Database</strong></p>
<p><strong>1.</strong> Create a database using <strong>phpMyAdmin</strong> or any MySQL management tool. For example, you can create a database named <code>laravel_hanoi</code>.</p>
<p><strong>2.</strong> Configure your <code>.env</code> file with your database credentials:</p>
<pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_hanoi
DB_USERNAME=root
DB_PASSWORD=</code></pre>
<p><strong>Make sure your DB_USERNAME and DB_PASSWORD match your local MySQL credentials.</strong></p>

<p><strong>Step 6: Run Migrations</strong></p>
<p>Run the migrations to create the necessary tables in your database:</p>
<pre><code>php artisan migrate</code></pre>

<p><strong>Step 7: Seed the Database (Optional)</strong></p>
<p>If the project includes seed data (optional), populate the database with sample data:</p>
<pre><code>php artisan db:seed</code></pre>

<p><strong>Step 8: Serve the Application</strong></p>
<p>Start the Laravel development server:</p>
<pre><code>php artisan serve</code></pre>
<p>You can now access the application at <a href="http://localhost:8000" target="_blank">http://localhost:8000</a> in your browser.</p>
