Feature: Admovil get UUID
    In Order to get voucher  UUID
    As a User
    I need to be see the UUID

  Scenario: Get UUID of voucher
      Given I generate a multiples bills as:
          | value | currency |
          | 250   | MXN      |
      Then Must me notified with the uuid of voucher
