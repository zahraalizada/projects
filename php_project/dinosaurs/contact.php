<section id="contact">
    <div class="container py-5">
        <h2 class=" text-success mb-4">CONTACT US</h2>
        <form action="contact-insert.php" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="lname" class="form-label">Surname</label>
                        <input type="text" class="form-control" name="lname">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Your Message" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-success ">Submit</button>
        </form>
    </div>
</section>



