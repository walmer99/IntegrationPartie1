<?php
require 'add.php';
include 'header.php';
?>

<!--corps de la page-->
<div class="container-fluid">
    <hr>
    <section class="fellows">
        <h2 id="fellows">Fellows wanted dead (or alive if you want to eat them later)</h2><br>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="col-text"><h2>Most wanted</h2></div>
                    <div class="card">
                        <div class="page">
                            <img src="https://i.postimg.cc/cCYcGwWj/wanted.png" class="img-fluid"
                                 alt="photo de Gandalf">
                            <div id="gandalf">Gandalf</div>
                            <div class="reward">reward <span class="police_color">1000 </span><br/>golden
                                coins
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h2>Gandalf</h2>
                            </div>
                            <div class="card-text">Small description</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="col-text1"><h2>Most dangerous</h2></div>
                    <div class="card">
                        <div class="page1">
                            <img src="https://i.postimg.cc/rs0kY3jf/hobbit.jpg" class="img-fluid" alt="photo de hobbit">
                            <div id="hobbit">DEAD</div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h2>Hobbit "#"</h2>
                            </div>
                            <div class="card-text">Small description</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="col-text1"><h2>Already captured</h2></div>
                    <div class="card">
                        <div class="page">
                            <img src="https://i.postimg.cc/3xSHY3qt/yummydwarf.jpg" class="img-fluid"
                                 alt="photo de yummyDwarf">
                            <div id="yummyDwarf">Yummy Dwarf</div>
                            <div class="reward">reward <span class="police_color">250</span><br/>golden
                                coins
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h2>Yummy Dwarf</h2>
                            </div>
                            <div class="card-text">Small description</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="get-my-reward">
        <h2 id="get-my-reward">I have captured one of them, how do I get my reward ?</h2>
        <p>Fuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia.
            Sortietur an
            non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus?
            Quo? Quo
            pervenire ante certam diem non↩
            licebit. ianuario, Februario, provinciam non habebit; Kalendis ei denique Martiis nascetur repente
            provincia.
        </p>
        <a class="btn btn-primary" href="#contact-us" role="button">Contact us</a>
    </section>
    <hr>
    <section class="best-hunters">
        <h2 id="best-hunters">Best hunters</h2>
        <div class="media">
            <img src="https://via.placeholder.com/140" class="align-self-center mr-3" alt="photo">
            <div class="media-body">
                <br>
                <h5 class="mt-0">ElvesKiller22</h5>
                <p>2 captures - Profile</p>
                <p class="mb-0">
                    <button id="myBtn5">Like</button>
                </p>
            </div>
            <img src="https://via.placeholder.com/140" class="align-self-center mr-3" alt="photo">
            <div class="media-body">
                <br>
                <h5 class="mt-0">Goblin45</h5>
                <p>1 captures - Profile</p>
                <p class="mb-0">
                    <button id="myBtn6">Like</button>
                </p>
            </div>
        </div>
    </section>
    <hr>
    <section class="the-ring">
        <h2 id="the-ring">About the ring</h2>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Ring capabilities</th>
                </tr>
                <tr>
                    <td>What can our master do with the ring ?

                        <table class="table table-bordered">
                            <tr>
                                <th>Feature</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>Main</td>
                                <td>One ring to rule them all</td>
                            </tr>
                            <tr>
                                <td>Invisibility</td>
                                <td>You can't see me</td>
                            </tr>
                            <tr>
                                <td>Power</td>
                                <td>Destroy the world</td>
                            </tr>
                        </table>
            </table>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Why is the ring awesome ?</th>
                </tr>
                <tr>
                    <td>My preciooooooousssssss ! Hrk Hrk we want my preciooooooussssss !!</td>
                </tr>
            </table>
        </div>
    </section>
    <hr>
    <section class="join-the-army">
        <h2 id="join-the-army">Join Mordor army, we need you!</h2>
        <div class="media">
            <img src="https://via.placeholder.com/140" class="align-self-center mr-3" alt="photo">
            <div class="media-body">
                <br>
                <p>Fuerit toto in consulatu sine provincia, cui fuerit, antequam designatus est, decreta provincia.
                    Sortietur an
                    non? Nam et non sortiri absurdum est, et, quod sortitus sis, non habere. Proficiscetur paludatus?
                    Quo? Quo
                    pervenire ante certam diem non↩
                    licebit. ianuario, Februario, provinciam non habebit; Kalendis ei denique Martiis nascetur repente
                    provincia.</p>
                <p class="mb-0">
                    <button id="myBtn7">More info on SauronRulesThemAll.com</button>
                </p>
            </div>
        </div>
</section>
<hr>
</div>
<section class="contact-us">
    <h2 id="contact-us">Contact Us</h2>
    <?php if ($showForm == "yes") { ?>
        <form action="findThePrecious.php#contact-us" method="POST">
            <div class="form-group">

                <input type="email" class="form-control"  name="email" placeholder="@"
                       value="<?php if (isset($answers["email"])) echo $answers["email"]; ?>">
                <?php if (isset($errors["email"])) echo '<p class="myclass">' . $errors["email"]; ?>
            </div>
            <div class="form-group">

                <input type="text" class="form-control"  name="pseudo"
                       placeholder="pseudo">
                <?php if (isset($errors["pseudo"])) echo '<p class="myclass">' . $errors["pseudo"]; ?>
            </div>
            <div class="form-group">

                <select class="form-control" id="exampleFormControlSelect1" name="option">
                    <option value="">Choose an option</option>
                    <option value="1" <?php if (isset($answers["option"])) {
                        if ($answers["option"] == '1') {
                            echo "selected";
                        }
                    } ?>>I have seen one of them
                    </option>
                    <option value="2" <?php if (isset($answers["option"])) {
                        if ($answers["option"] == '2') {
                            echo "selected";
                        }
                    } ?>>I have captured on of them
                    </option>
                    <option value="3" <?php if (isset($answers["option"])) {
                        if ($answers["option"] == '3') {
                            echo "selected";
                        }
                    } ?>>I want to join your army
                    </option>
                </select>
                <?php if (isset($errors["option"])) echo '<p class="myclass">' . $errors["option"]; ?>
            </div>
            <div class="form-group">

                <textarea class="form-control"
                          placeholder="Your message" rows="3"
                          name="message"><?php if (isset($answers["message"])) echo $answers["message"]; ?></textarea>
                <?php if (isset($errors["message"])) echo '<p class="myclass">' . $errors["message"]; ?>
            </div>
            <div class="button">
                <input class="send" type="submit" value="Submit">
            </div>
        </form>
    <?php } else {
        echo "$showForm";
    } ?>
</section>
<hr>
<?php
include 'footer.php'
?>


