
import pytest

pytestmark = [pytest.mark.fe, pytest.mark.slow]
@pytest.fixture(scope='module')
def my_setup():
    print("")
    print(">>>>>>MY SETUP<<<<<<")

    return{'id': 20, 'name': 'bruh'}
@pytest.mark.abc
class TestChecout(object):

    def test_checkout_as_guest(self):
        print("Checkout as guest")
        print("Class: 11111111")


    def test_checkout_with_existing_user(self):
        print("Checkout with existing user")
        print("Class: 2222222")