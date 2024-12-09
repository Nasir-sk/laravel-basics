<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
     <h2>Add new user</h2>
     <form action="adduser" method="post">
        @csrf
        <div>
            <input type="text" placeholder="Enter your name" name="username">
        </div>
        <div>
            <input type="text" placeholder="Enter your email" name="email">
        </div>
        <div>
            <input type="text" placeholder="Enter your city" name="city">
        </div>
        <div>
            <h5>Skills</h5>
            <input type="checkbox" name="skills" id="java" value="java">
            <label for="java">Java</label>
            <input type="checkbox" name="skills" id="php" value="php">
            <label for="php">php</label>
            <input type="checkbox" name="skills" id="node" value="node">
            <label for="node">node</label>
        </div>
        <div>
            <button>Add New User</button>
        </div>
     </form>
</div>
