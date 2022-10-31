
import pytest

pytestmark = [pytest.mark.be, pytest.mark.slow]

@pytest.fixture(scope='module')
def my_setup():
    print("")
    print(">>>>>>MY SETUP<<<<<<")

    return{'id': 20, 'name': 'bruh'}

@pytest.mark.smoke
@pytest.mark.ll
def test_login_page_valid_user(my_setup):
    print("Login with valid user")
    print("Function: aaaaaaaa")
    print("Name: {}".format(my_setup.get('name')))
    import pdb; pdb.set_trace()

@pytest.mark.regression
def test_login_page_wrong_password(my_setup):
    print("Login with wrong password")
    print("Function: bbbbbbbb")
    # assert 1==2, 'One is not two'