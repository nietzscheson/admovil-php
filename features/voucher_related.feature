Feature: Admovil Voucher Related
    In Order to related multiples Voucher
    As a User
    I need to be able related multiples Admovil Voucher

  Scenario: Related multiples Vouchers
      Given I generate a multiples bills as:
          | value | currency |
          | 250   | MXN      |
          | 150   | MXN      |
      And I generate a bill for related as:
          | value | currency |
          | 500   | MXN      |
      When I want related
      Then Must me notified that is related
