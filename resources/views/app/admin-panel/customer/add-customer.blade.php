<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form with Sidebar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>


<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar with buttons -->
            <div class="col-md-3">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal"
                        data-target="#basicinfo">Basic Info</button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal"
                        data-target="#emergency">Emergency Contact</button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal"
                        data-target="#review">Review</button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal"
                        data-target="#emergency">Payment Authority</button>
                    <button type="button"class="list-group-item list-group-item-action" data-toggle="modal"
                        data-target="#emergency">Documents</button>
                    <button type="button"
                        class="list-group-item list-group-item-action" data-toggle="modal"
                        data-target="#emergency">Contract</button>
                    <button type="button"
                        class="list-group-item list-group-item-action" data-toggle="modal"
                        data-target="#emergency">Wallet</button>
                    <button type="button"
                        class="list-group-item list-group-item-action" data-toggle="modal"
                        data-target="#emergency">Client Dashboard</button>
                    <button type="button"
                        class="list-group-item list-group-item-action" data-toggle="modal"
                        data-target="#emergency">Communication</button>
                    <button type="button"
                        class="list-group-item list-group-item-action" data-toggle="modal"
                        data-target="#emergency">Third Party Keys</button>
                </div>
            </div>
            <!-- Form -->
            <div class="col-md-9">
                <h4>General</h4>
                <form>
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" class="form-control" id="email" placeholder="E_Mail Id">
                    </div>
                    <div class="form-group">
                        <label for="message">Number</label>
                        <input type="number" class="form-control" id="number" placeholder="Number">

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap Modal for opening new form -->
    <div class="modal fade" id="basicinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5" for="firstName">First Name</label>
                            <input type="text" class="form-control form-control-lg" id="firstName" name="firstName"
                                placeholder="First Name" />
                            @error('firstName')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5" for="middleName">Middle Name</label>
                            <input type="text" class="form-control form-control-lg" id="middleName" name="middleName"
                                placeholder="Middle Name" />
                            @error('middleName')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5" for="lastName">Last Name</label>
                            <input type="number" class="form-control form-control-lg" id="lastName" name="lastName"
                                placeholder="Last Name" />
                            @error('lastName')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5" for="preferredName">Preferred Name</label>
                            <input type="text" class="form-control form-control-lg" id="preferredName"
                                name="preferredName" placeholder="Preferred Name" />
                            @error('preferredName')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5" for="email">E-Mail</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email"
                                placeholder="E-Mail" />
                            @error('email')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5" for="number">Number</label>
                            <input type="number" class="form-control form-control-lg" id="number" name="number"
                                placeholder="Number" />
                            @error('number')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5" for="category">Category</label>
                            <input type="text" class="form-control form-control-lg" id="category"
                                name="category" placeholder="Category" />
                            @error('category')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">Female</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="dropdown">
                                <label class="form-label fs-5" for="profileColor">Profile (Color)</label>
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="profileColorDropdown" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Select Color
                                </button>
                                <div class="dropdown-menu" aria-labelledby="profileColorDropdown">
                                    <a class="dropdown-item" href="#">Red</a>
                                    <a class="dropdown-item" href="#">Blue</a>
                                    <a class="dropdown-item" href="#">Green</a>
                                    <!-- Add more color options here -->
                                </div>
                            </div>
                            @error('profileColor')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5" for="dob">Date of Birth</label>
                            <input type="date" class="form-control form-control-lg" id="dob" name="dob"
                                placeholder="DD/MM/YYYY" />
                            @error('dob')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5" for="accountFee">Account Management Fee</label>
                            <input type="text" class="form-control form-control-lg" id="accountFee"
                                name="accountFee" placeholder="Account Management Fee" />
                            @error('accountFee')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5" for="paymentDue">Payment Due Day</label>
                            <input type="text" class="form-control form-control-lg" id="paymentDue"
                                name="paymentDue" placeholder="Payment Due Day" />
                            @error('paymentDue')
                                <div class="invalid-tooltip">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="form-label fs-5">Marketing</label>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled"
                                disabled>
                            <label class="form-check-label" for="flexCheckDisabled">
                                SMS
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="flexCheckCheckedDisabled" checked disabled>
                                <label class="form-check-label" for="flexCheckCheckedDisabled">
                                    Email
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-primary">Update</button>
                        </div>
                        <div class="col-sm-6 text-right">
                            <button type="submit" class="btn btn-danger">Disable Account</button>
                        </div>
                    </div>
                </div>

                {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
            </div>
        </div>
    </div>
    <div class="modal fade" id="emergency" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Next to kin</h4>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#addContactModal">Add Contact</button>

                    <!-- Modal -->
                    <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="contactName">Select Kin</label>
                                            <input type="text" class="form-control" id="contactName"
                                                placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactName">Name</label>
                                            <input type="text" class="form-control" id="contactName"
                                                placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactName">Contact</label>
                                            <input type="text" class="form-control" id="contactName"
                                                placeholder="Enter name">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Add Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Type</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#addreviewModal">Add Review</button>
                    <div class="modal fade" id="addreviewModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Review</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="contactName">Select Type</label>
                                            <input type="text" class="form-control" id="contactName"
                                                placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="contactName">Review</label>
                                            <input type="text" class="form-control" id="contactName"
                                                placeholder="Enter name">
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Add Contact</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Review</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (Optional, if you need dropdowns, modals, etc.) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
